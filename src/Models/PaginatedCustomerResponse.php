<?php

namespace Inserve\StreamOneAPI\Models;

/**
 *
 */
final class PaginatedCustomerResponse
{
    /**
     * @var Customer[]|null
     */
    protected ?array $customers = null;
    protected ?string $nextPageToken = null;

    /**
     * @return Customer[]|null
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }

    /**
     * @return string|null
     */
    public function getNextPageToken(): ?string
    {
        return $this->nextPageToken;
    }

    /**
     * @param Customer[]|null $customers
     */
    public function setCustomers(?array $customers): self
    {
        $this->customers = $customers;

        return $this;
    }

    /**
     * @param string|null $nextPageToken
     *
     * @return $this
     */
    public function setNextPageToken(?string $nextPageToken): self
    {
        $this->nextPageToken = $nextPageToken;

        return $this;
    }
}
