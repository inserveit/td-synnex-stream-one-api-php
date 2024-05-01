<?php

namespace Inserve\StreamOneAPI\Models;

/**
 *
 */
class BillingData
{
    protected ?string $id = null;
    protected ?string $accountId = null;
    protected ?string $customerName = null;
    protected ?string $productName = null;
    protected ?string $skuName = null;
    protected ?string $billingCycle = null;
    protected ?float $sellerCost = null;
    protected int|float|null $customerCost = null;
    protected ?float $margin = null;
    protected int|float|null $usageQuantity = null;
    protected ?string $currency = null;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @return string|null
     */
    public function getSkuName(): ?string
    {
        return $this->skuName;
    }

    /**
     * @return string|null
     */
    public function getBillingCycle(): ?string
    {
        return $this->billingCycle;
    }

    /**
     * @return float|null
     */
    public function getSellerCost(): ?float
    {
        return $this->sellerCost;
    }

    /**
     * @return int|float|null
     */
    public function getCustomerCost(): int|float|null
    {
        return $this->customerCost;
    }

    /**
     * @return float|null
     */
    public function getMargin(): ?float
    {
        return $this->margin;
    }

    /**
     * @return int|float|null
     */
    public function getUsageQuantity(): int|float|null
    {
        return $this->usageQuantity;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $id
     *
     * @return $this
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string|null $accountId
     *
     * @return $this
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @param string|null $customerName
     *
     * @return $this
     */
    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * @param string|null $productName
     *
     * @return $this
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * @param string|null $skuName
     *
     * @return $this
     */
    public function setSkuName(?string $skuName): self
    {
        $this->skuName = $skuName;

        return $this;
    }

    /**
     * @param string|null $billingCycle
     *
     * @return $this
     */
    public function setBillingCycle(?string $billingCycle): self
    {
        $this->billingCycle = $billingCycle;

        return $this;
    }

    /**
     * @param float|null $sellerCost
     *
     * @return $this
     */
    public function setSellerCost(?float $sellerCost): self
    {
        $this->sellerCost = $sellerCost;

        return $this;
    }

    /**
     * @param int|float|null $customerCost
     *
     * @return $this
     */
    public function setCustomerCost(int|float|null $customerCost): self
    {
        $this->customerCost = $customerCost;

        return $this;
    }

    /**
     * @param float|null $margin
     *
     * @return $this
     */
    public function setMargin(?float $margin): self
    {
        $this->margin = $margin;

        return $this;
    }

    /**
     * @param int|float|null $usageQuantity
     *
     * @return $this
     */
    public function setUsageQuantity(int|float|null $usageQuantity): self
    {
        $this->usageQuantity = $usageQuantity;

        return $this;
    }

    /**
     * @param string|null $currency
     *
     * @return $this
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
