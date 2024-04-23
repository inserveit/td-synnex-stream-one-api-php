<?php

namespace Inserve\StreamOneAPI\Models;

/**
 *
 */
class PaginatedSubscriptionResponse
{
    /**
     * @var Subscription[]|null
     */
    protected ?array $items = null;
    protected ?array $paginationResponse = null;

    /**
     * @return Subscription[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @return array|null
     */
    public function getPaginationResponse(): ?array
    {
        return $this->paginationResponse;
    }

    /**
     * @param Subscription[]|null $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param array|null $paginationResponse
     *
     * @return $this
     */
    public function setPaginationResponse(?array $paginationResponse): self
    {
        $this->paginationResponse = $paginationResponse;

        return $this;
    }
}
