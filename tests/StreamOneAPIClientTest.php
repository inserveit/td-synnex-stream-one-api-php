<?php

namespace Inserve\StreamOneAPI\Tests;

use Inserve\StreamOneAPI\API\CustomerAPI;
use Inserve\StreamOneAPI\API\SubscriptionAPI;
use Inserve\StreamOneAPI\Client\APIClient;
use Inserve\StreamOneAPI\Exception\StreamOneAPIException;
use Inserve\StreamOneAPI\Models\AccessToken;
use Inserve\StreamOneAPI\StreamOneAPIClient;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class StreamOneAPIClientTest extends TestCase
{
    /**
     * @return void
     *
     * @throws Exception
     */
    public function testMagicMethods(): void
    {
        $apiClientMock = $this->createMock(APIClient::class);
        $apiClient = new StreamOneAPIClient($apiClientMock);

        self::assertInstanceOf(CustomerAPI::class, $apiClient->customer);
        self::assertInstanceOf(SubscriptionAPI::class, $apiClient->subscription);
    }

    /**
     * @return void
     *
     * @throws Exception
     * @throws StreamOneAPIException
     * @throws ExceptionInterface
     */
    public function testRefreshToken(): void
    {
        $apiClientMock = $this->createMock(APIClient::class);
        $accessToken = new AccessToken();
        $accessToken->setAccessToken('unit.test');

        $apiClientMock->expects($this->once())
            ->method('call')
            ->with(
                'POST',
                '/oauth/token',
                ['Content-Type' => 'application/x-www-form-urlencoded'],
                '',
                ['form_params' => ['refresh_token' => '12345678', 'grant_type' => 'refresh_token']]
            )
            ->willReturn('access.token');

        $apiClientMock->expects(self::once())
            ->method('denormalize')
            ->with('access.token', AccessToken::class)
            ->willReturn($accessToken);

        $client = new StreamOneAPIClient($apiClientMock);
        $authenticateResult = $client->refreshToken('12345678');

        self::assertInstanceOf(AccessToken::class, $authenticateResult);
        self::assertSame($accessToken->getAccessToken(), $authenticateResult->getAccessToken());
    }
}
