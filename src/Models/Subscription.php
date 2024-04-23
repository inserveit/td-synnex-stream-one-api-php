<?php

namespace Inserve\StreamOneAPI\Models;

/**
 *
 */
class Subscription
{
    protected ?string $id = null;
    protected ?string $customerId = null;
    protected ?string $resellerId = null;
    protected ?string $isvId = null;
    protected ?string $cloudProviderId = null;
    protected ?string $subscriptionId = null;
    protected ?string $subscriptionName = null;
    protected ?string $resourceType = null;
    protected ?string $ccpProductId = null;
    protected ?string $ccpSkuId = null;
    protected ?string $ccpPlanId = null;
    protected ?string $subscriptionProductId = null;
    protected ?string $subscriptionSkuId = null;
    protected ?string $subscriptionOfferId = null;
    protected ?string $subscriptionTotalLicenses = null;
    protected ?string $unitType = null;
    protected ?string $subscriptionStatus = null;
    protected ?string $subscriptionPurchasedDate = null;
    protected ?string $subscriptionStartDate = null;
    protected ?string $subscriptionEndDate = null;
    protected ?string $cancellationAllowedUntilDate = null;
    protected ?string $subscriptionBillingType = null;
    protected ?string $subscriptionBillingCycle = null;
    protected ?string $subscriptionBillingTerm = null;
    protected ?string $subscriptionRenewStatus = null;
    protected ?string $billingCurrency = null;
    protected ?float $customerCost = null;
    /**
     * @var BillingData[]|null
     */
    protected ?array $billingData = null;
    protected ?CcpProductInfo $ccpProductInfo = null;
    protected ?bool $autoRenew = null;
    protected ?string $customerName = null;
    protected ?string $partnerName = null;
    protected ?string $lastUpdatedDate = null;

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
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @return string|null
     */
    public function getResellerId(): ?string
    {
        return $this->resellerId;
    }

    /**
     * @return string|null
     */
    public function getIsvId(): ?string
    {
        return $this->isvId;
    }

    /**
     * @return string|null
     */
    public function getCloudProviderId(): ?string
    {
        return $this->cloudProviderId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionName(): ?string
    {
        return $this->subscriptionName;
    }

    /**
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }

    /**
     * @return string|null
     */
    public function getCcpProductId(): ?string
    {
        return $this->ccpProductId;
    }

    /**
     * @return string|null
     */
    public function getCcpSkuId(): ?string
    {
        return $this->ccpSkuId;
    }

    /**
     * @return string|null
     */
    public function getCcpPlanId(): ?string
    {
        return $this->ccpPlanId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionProductId(): ?string
    {
        return $this->subscriptionProductId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionSkuId(): ?string
    {
        return $this->subscriptionSkuId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionOfferId(): ?string
    {
        return $this->subscriptionOfferId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionTotalLicenses(): ?string
    {
        return $this->subscriptionTotalLicenses;
    }

    /**
     * @return string|null
     */
    public function getUnitType(): ?string
    {
        return $this->unitType;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionStatus(): ?string
    {
        return $this->subscriptionStatus;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionPurchasedDate(): ?string
    {
        return $this->subscriptionPurchasedDate;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionStartDate(): ?string
    {
        return $this->subscriptionStartDate;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionEndDate(): ?string
    {
        return $this->subscriptionEndDate;
    }

    /**
     * @return string|null
     */
    public function getCancellationAllowedUntilDate(): ?string
    {
        return $this->cancellationAllowedUntilDate;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionBillingType(): ?string
    {
        return $this->subscriptionBillingType;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionBillingCycle(): ?string
    {
        return $this->subscriptionBillingCycle;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionBillingTerm(): ?string
    {
        return $this->subscriptionBillingTerm;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionRenewStatus(): ?string
    {
        return $this->subscriptionRenewStatus;
    }

    /**
     * @return string|null
     */
    public function getBillingCurrency(): ?string
    {
        return $this->billingCurrency;
    }

    /**
     * @return float|null
     */
    public function getCustomerCost(): ?float
    {
        return $this->customerCost;
    }

    /**
     * @return BillingData[]|null
     */
    public function getBillingData(): ?array
    {
        return $this->billingData;
    }

    /**
     * @return CcpProductInfo|null
     */
    public function getCcpProductInfo(): ?CcpProductInfo
    {
        return $this->ccpProductInfo;
    }

    /**
     * @return bool|null
     */
    public function getAutoRenew(): ?bool
    {
        return $this->autoRenew;
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
    public function getPartnerName(): ?string
    {
        return $this->partnerName;
    }

    /**
     * @return string|null
     */
    public function getLastUpdatedDate(): ?string
    {
        return $this->lastUpdatedDate;
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
     * @param string|null $customerId
     *
     * @return $this
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @param string|null $resellerId
     *
     * @return $this
     */
    public function setResellerId(?string $resellerId): self
    {
        $this->resellerId = $resellerId;

        return $this;
    }

    /**
     * @param string|null $isvId
     *
     * @return $this
     */
    public function setIsvId(?string $isvId): self
    {
        $this->isvId = $isvId;

        return $this;
    }

    /**
     * @param string|null $cloudProviderId
     *
     * @return $this
     */
    public function setCloudProviderId(?string $cloudProviderId): self
    {
        $this->cloudProviderId = $cloudProviderId;

        return $this;
    }

    /**
     * @param string|null $subscriptionId
     *
     * @return $this
     */
    public function setSubscriptionId(?string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @param string|null $subscriptionName
     *
     * @return $this
     */
    public function setSubscriptionName(?string $subscriptionName): self
    {
        $this->subscriptionName = $subscriptionName;

        return $this;
    }

    /**
     * @param string|null $resourceType
     *
     * @return $this
     */
    public function setResourceType(?string $resourceType): self
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * @param string|null $ccpProductId
     *
     * @return $this
     */
    public function setCcpProductId(?string $ccpProductId): self
    {
        $this->ccpProductId = $ccpProductId;

        return $this;
    }

    /**
     * @param string|null $ccpSkuId
     *
     * @return $this
     */
    public function setCcpSkuId(?string $ccpSkuId): self
    {
        $this->ccpSkuId = $ccpSkuId;

        return $this;
    }

    /**
     * @param string|null $ccpPlanId
     *
     * @return $this
     */
    public function setCcpPlanId(?string $ccpPlanId): self
    {
        $this->ccpPlanId = $ccpPlanId;

        return $this;
    }

    /**
     * @param string|null $subscriptionProductId
     *
     * @return $this
     */
    public function setSubscriptionProductId(?string $subscriptionProductId): self
    {
        $this->subscriptionProductId = $subscriptionProductId;

        return $this;
    }

    /**
     * @param string|null $subscriptionSkuId
     *
     * @return $this
     */
    public function setSubscriptionSkuId(?string $subscriptionSkuId): self
    {
        $this->subscriptionSkuId = $subscriptionSkuId;

        return $this;
    }

    /**
     * @param string|null $subscriptionOfferId
     *
     * @return $this
     */
    public function setSubscriptionOfferId(?string $subscriptionOfferId): self
    {
        $this->subscriptionOfferId = $subscriptionOfferId;

        return $this;
    }

    /**
     * @param string|null $subscriptionTotalLicenses
     *
     * @return $this
     */
    public function setSubscriptionTotalLicenses(?string $subscriptionTotalLicenses): self
    {
        $this->subscriptionTotalLicenses = $subscriptionTotalLicenses;

        return $this;
    }

    /**
     * @param string|null $unitType
     *
     * @return $this
     */
    public function setUnitType(?string $unitType): self
    {
        $this->unitType = $unitType;

        return $this;
    }

    /**
     * @param string|null $subscriptionStatus
     *
     * @return $this
     */
    public function setSubscriptionStatus(?string $subscriptionStatus): self
    {
        $this->subscriptionStatus = $subscriptionStatus;

        return $this;
    }

    /**
     * @param string|null $subscriptionPurchasedDate
     *
     * @return $this
     */
    public function setSubscriptionPurchasedDate(?string $subscriptionPurchasedDate): self
    {
        $this->subscriptionPurchasedDate = $subscriptionPurchasedDate;

        return $this;
    }

    /**
     * @param string|null $subscriptionStartDate
     *
     * @return $this
     */
    public function setSubscriptionStartDate(?string $subscriptionStartDate): self
    {
        $this->subscriptionStartDate = $subscriptionStartDate;

        return $this;
    }

    /**
     * @param string|null $subscriptionEndDate
     *
     * @return $this
     */
    public function setSubscriptionEndDate(?string $subscriptionEndDate): self
    {
        $this->subscriptionEndDate = $subscriptionEndDate;

        return $this;
    }

    /**
     * @param string|null $cancellationAllowedUntilDate
     *
     * @return $this
     */
    public function setCancellationAllowedUntilDate(?string $cancellationAllowedUntilDate): self
    {
        $this->cancellationAllowedUntilDate = $cancellationAllowedUntilDate;

        return $this;
    }

    /**
     * @param string|null $subscriptionBillingType
     *
     * @return $this
     */
    public function setSubscriptionBillingType(?string $subscriptionBillingType): self
    {
        $this->subscriptionBillingType = $subscriptionBillingType;

        return $this;
    }

    /**
     * @param string|null $subscriptionBillingCycle
     *
     * @return $this
     */
    public function setSubscriptionBillingCycle(?string $subscriptionBillingCycle): self
    {
        $this->subscriptionBillingCycle = $subscriptionBillingCycle;

        return $this;
    }

    /**
     * @param string|null $subscriptionBillingTerm
     *
     * @return $this
     */
    public function setSubscriptionBillingTerm(?string $subscriptionBillingTerm): self
    {
        $this->subscriptionBillingTerm = $subscriptionBillingTerm;

        return $this;
    }

    /**
     * @param string|null $subscriptionRenewStatus
     *
     * @return $this
     */
    public function setSubscriptionRenewStatus(?string $subscriptionRenewStatus): self
    {
        $this->subscriptionRenewStatus = $subscriptionRenewStatus;

        return $this;
    }

    /**
     * @param string|null $billingCurrency
     *
     * @return $this
     */
    public function setBillingCurrency(?string $billingCurrency): self
    {
        $this->billingCurrency = $billingCurrency;

        return $this;
    }

    /**
     * @param float|null $customerCost
     *
     * @return $this
     */
    public function setCustomerCost(?float $customerCost): self
    {
        $this->customerCost = $customerCost;

        return $this;
    }

    /**
     * @param BillingData[]|null $billingData
     */
    public function setBillingData(?array $billingData): self
    {
        $this->billingData = $billingData;

        return $this;
    }

    /**
     * @param CcpProductInfo|null $ccpProductInfo
     *
     * @return $this
     */
    public function setCcpProductInfo(?CcpProductInfo $ccpProductInfo): self
    {
        $this->ccpProductInfo = $ccpProductInfo;

        return $this;
    }

    /**
     * @param bool|null $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew(?bool $autoRenew): self
    {
        $this->autoRenew = $autoRenew;

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
     * @param string|null $partnerName
     *
     * @return $this
     */
    public function setPartnerName(?string $partnerName): self
    {
        $this->partnerName = $partnerName;

        return $this;
    }

    /**
     * @param string|null $lastUpdatedDate
     *
     * @return $this
     */
    public function setLastUpdatedDate(?string $lastUpdatedDate): self
    {
        $this->lastUpdatedDate = $lastUpdatedDate;

        return $this;
    }
}
