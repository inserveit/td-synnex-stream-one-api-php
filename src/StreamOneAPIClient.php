<?php

namespace Inserve\StreamOneAPI;

use GuzzleHttp\Client;
use Inserve\StreamOneAPI\API\CustomerAPI;
use Inserve\StreamOneAPI\API\SubscriptionAPI;
use Inserve\StreamOneAPI\Client\APIClient;
use Inserve\StreamOneAPI\Exception\StreamOneAPIException;
use Inserve\StreamOneAPI\Models\AccessToken;
use Psr\Log\LoggerInterface;
use SensitiveParameter;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * @property CustomerAPI     $customer
 * @property SubscriptionAPI $subscription
 */
class StreamOneAPIClient
{
    protected APIClient $apiClient;

    /**
     * @param APIClient|null       $apiClient
     * @param LoggerInterface|null $logger
     */
    public function __construct(?APIClient $apiClient = null, ?LoggerInterface $logger = null)
    {
        if (! $apiClient) {
            $apiClient = new APIClient(
                new Client(['base_uri' => 'https://ion.tdsynnex.com'])
            );
        }

        if ($logger) {
            $apiClient->setLogger($logger);
        }

        $this->apiClient = $apiClient;
    }

    /**
     * @param string        $name
     * @param array<string> $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments): mixed
    {
        return $this->__get($name);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name): mixed
    {
        $fqdnClass = sprintf('%s\\API\\%sAPI', __NAMESPACE__, ucfirst($name));

        if (class_exists($fqdnClass)) {
            return new $fqdnClass($this->apiClient);
        }

        return null;
    }

    /**
     * @param AccessToken $accessToken
     *
     * @return void
     */
    public function setAccessToken(#[SensitiveParameter] AccessToken $accessToken): void
    {
        $this->apiClient->setAccessToken($accessToken);
    }

    /**
     * @param string $refreshToken
     *
     * @return AccessToken|null
     *
     * @throws StreamOneAPIException
     * @throws ExceptionInterface
     */
    public function refreshToken(#[SensitiveParameter] string $refreshToken): ?AccessToken
    {
        $formData = [
            'form_params' => [
                'refresh_token' => $refreshToken,
                'grant_type' => 'refresh_token',
            ],
        ];

        $tokenResponse = $this->apiClient->call(
            method: 'POST',
            url: '/oauth/token',
            headers: ['Content-Type' => 'application/x-www-form-urlencoded'],
            options: $formData,
        );

        /**
         * @var AccessToken|null $accessToken
         */
        $accessToken = $this->apiClient->denormalize($tokenResponse, AccessToken::class);
        if ($accessToken instanceof AccessToken) {
            $this->apiClient->setAccessToken($accessToken);
        }

        return $accessToken;
    }
}
