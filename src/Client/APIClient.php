<?php

namespace Inserve\StreamOneAPI\Client;

use Exception;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Inserve\StreamOneAPI\Exception\StreamOneAPIException;
use Inserve\StreamOneAPI\Models\AccessToken;
use Inserve\StreamOneAPI\Models\ErrorResponse;
use Psr\Log\LoggerAwareTrait;
use SensitiveParameter;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AttributeLoader;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 *
 */
class APIClient
{
    use LoggerAwareTrait;

    protected ?AccessToken $accessToken = null;
    protected Serializer $serializer;
    protected ObjectNormalizer $normalizer;

    /**
     * @param ClientInterface $client
     */
    public function __construct(protected ClientInterface $client)
    {
        $classMetadataFactory = new ClassMetadataFactory(new AttributeLoader());
        $nameConverter =  new MetadataAwareNameConverter(
            $classMetadataFactory,
            new CamelCaseToSnakeCaseNameConverter()
        );

        $extractor = new PropertyInfoExtractor(
            typeExtractors: [
                new PhpDocExtractor(),
                new ReflectionExtractor(),
            ]
        );
        $this->normalizer = new ObjectNormalizer(
            classMetadataFactory: $classMetadataFactory,
            nameConverter: $nameConverter,
            propertyTypeExtractor: $extractor,
            defaultContext: [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]
        );

        $this->serializer = new Serializer(
            [$this->normalizer, new ArrayDenormalizer()],
            [new JsonEncoder()]
        );

        $this->accessToken = null;
    }

    /**
     * @param AccessToken $accessToken
     *
     * @return void
     */
    public function setAccessToken(#[SensitiveParameter] AccessToken $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return AccessToken|null
     */
    public function getAccessToken(): ?AccessToken
    {
        return $this->accessToken;
    }

    /**
     * @param mixed  $response
     * @param string $class
     *
     * @return mixed
     *
     * @throws ExceptionInterface
     */
    public function denormalize(mixed $response, string $class): mixed
    {
        try {
            return $this->normalizer->denormalize($response, $class);
        } catch (Exception $exception) {
            $this->logError(sprintf('(%s): %s', __FUNCTION__, $exception->getMessage()));

            return null;
        }
    }

    /**
     * @param string                $method
     * @param string                $url
     * @param array<string, string> $headers
     * @param string|null           $body
     * @param array                 $options
     *
     * @return mixed
     *
     * @throws StreamOneAPIException
     */
    public function call(
        string $method,
        string $url,
        array $headers = [],
        ?string $body = null,
        array $options = []
    ): mixed {
        try {
            $request = new Request(
                $method,
                $this->getApiUrl($url),
                array_merge($this->getDefaultHeaders(), $headers),
                $body
            );

            $response = $this->client->send($request, $options);

            return json_decode((string) $response->getBody(), true);
        } catch (GuzzleException|BadResponseException $exception) {
            $errorResponse = null;
            $errorMessage = $exception->getMessage();

            if ($exception instanceof RequestException) {
                $errorResponse = $this->serializer->deserialize(
                    (string) $exception->getResponse()?->getBody(),
                    ErrorResponse::class,
                    'json'
                );

                if ($errorResponse instanceof ErrorResponse) {
                    $errorMessage = (string) $errorResponse->getMessage();
                }
            }

            $this->logError($errorMessage);

            throw new StreamOneAPIException(
                sprintf('%s: %s', $url, $errorMessage),
                $exception->getCode(),
                $errorResponse
            );
        }
    }

    /**
     * @param string $url
     *
     * @return string
     */
    protected function getApiUrl(string $url): string
    {
        if (str_contains($url, 'oauth/token')) {
            return $url;
        }

        return sprintf('/api/v3%s', $url);
    }

    /**
     * @return string[]
     */
    protected function getDefaultHeaders(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
        ];

        if ($this->accessToken !== null) {
            $headers['Authorization'] = sprintf('Bearer %s', $this->accessToken->getAccessToken() ?? '');
        }

        return $headers;
    }

    /**
     * @param string $message
     *
     * @return void
     */
    private function logError(string $message): void
    {
        if (!$this->logger) {
            return;
        }

        $this->logger->error($message);
    }
}
