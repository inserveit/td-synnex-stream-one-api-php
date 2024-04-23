<?php

namespace Inserve\StreamOneAPI\API;

use Inserve\StreamOneAPI\Exception\StreamOneAPIException;
use Inserve\StreamOneAPI\Models\Customer;
use Inserve\StreamOneAPI\Models\PaginatedCustomerResponse;
use Inserve\StreamOneAPI\Models\PaginatedSubscriptionResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class SubscriptionAPI extends AbstractAPIClient
{
    /**
     * @param int   $accountId
     * @param array $parameters
     *
     * @return PaginatedSubscriptionResponse|null
     *
     * @throws StreamOneAPIException
     * @throws ExceptionInterface
     */
    public function list(int $accountId, array $parameters = []): ?PaginatedSubscriptionResponse
    {
        $url = sprintf(
            '/accounts/%d/subscriptions?%s',
            $accountId,
            http_build_query($parameters)
        );

        $response = $this->apiClient->call('GET', $url);
        if (! $response) {
            return null;
        }

        return $this->apiClient->denormalize($response, PaginatedSubscriptionResponse::class);
    }
}
