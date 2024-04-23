<?php

namespace Inserve\StreamOneAPI\API;

use Inserve\StreamOneAPI\Exception\StreamOneAPIException;
use Inserve\StreamOneAPI\Models\Customer;
use Inserve\StreamOneAPI\Models\PaginatedCustomerResponse;
use Inserve\StreamOneAPI\Models\Subscription;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class CustomerAPI extends AbstractAPIClient
{
    /**
     * @param int $accountId
     * @param int $customerId
     *
     * @return Customer|null
     *
     * @throws ExceptionInterface
     * @throws StreamOneAPIException
     */
    public function get(int $accountId, int $customerId): ?Customer
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/accounts/%d/customers/%d', $accountId, $customerId)
        );

        if (! $response) {
            return null;
        }

        return $this->apiClient->denormalize($response, Customer::class);
    }

    /**
     * @param int         $accountId
     * @param int         $pageSize
     * @param string|null $pageToken
     *
     * @return PaginatedCustomerResponse|null
     *
     * @throws StreamOneAPIException
     * @throws ExceptionInterface
     */
    public function list(int $accountId, int $pageSize = 100, ?string $pageToken = null): ?PaginatedCustomerResponse
    {
        $url = sprintf(
            '/accounts/%d/customers?%s',
            $accountId,
            http_build_query([
                'pageSize' => $pageSize,
                'pageToken' => $pageToken,
            ])
        );

        $response = $this->apiClient->call('GET', $url);
        if (! $response) {
            return null;
        }

        return $this->apiClient->denormalize($response, PaginatedCustomerResponse::class);
    }

    /**
     * @param int    $accountId
     * @param int    $customerId
     * @param string $subscriptionId
     * @param bool   $refresh
     *
     * @return Subscription|null
     *
     * @throws ExceptionInterface
     * @throws StreamOneAPIException
     */
    public function subscriptionDetails(
        int $accountId,
        int $customerId,
        string $subscriptionId,
        bool $refresh = false
    ): ?Subscription {
        $url = sprintf(
            '/accounts/%d/customers/%d/subscriptions/%s?refresh=%s',
            $accountId,
            $customerId,
            $subscriptionId,
            $refresh ? 'true' : 'false'
        );

        $response = $this->apiClient->call('GET', $url);
        if (! $response) {
            return null;
        }

        return $this->apiClient->denormalize($response, Subscription::class);
    }
}
