<?php

namespace Inserve\StreamOneAPI\Models;

/**
 *
 */
final class CcpProductInfo
{
    protected ?string $productId = null;
    protected ?string $productDisplayName = null;
    protected ?string $skuId = null;
    protected ?string $skuDisplayName = null;
    protected ?string $planId = null;
    protected ?string $planDisplayName = null;

    /**
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @return string|null
     */
    public function getProductDisplayName(): ?string
    {
        return $this->productDisplayName;
    }

    /**
     * @return string|null
     */
    public function getSkuId(): ?string
    {
        return $this->skuId;
    }

    /**
     * @return string|null
     */
    public function getSkuDisplayName(): ?string
    {
        return $this->skuDisplayName;
    }

    /**
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }

    /**
     * @return string|null
     */
    public function getPlanDisplayName(): ?string
    {
        return $this->planDisplayName;
    }

    /**
     * @param string|null $productId
     *
     * @return $this
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param string|null $productDisplayName
     *
     * @return $this
     */
    public function setProductDisplayName(?string $productDisplayName): self
    {
        $this->productDisplayName = $productDisplayName;

        return $this;
    }

    /**
     * @param string|null $skuId
     *
     * @return $this
     */
    public function setSkuId(?string $skuId): self
    {
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * @param string|null $skuDisplayName
     *
     * @return $this
     */
    public function setSkuDisplayName(?string $skuDisplayName): self
    {
        $this->skuDisplayName = $skuDisplayName;

        return $this;
    }

    /**
     * @param string|null $planId
     *
     * @return $this
     */
    public function setPlanId(?string $planId): self
    {
        $this->planId = $planId;

        return $this;
    }

    /**
     * @param string|null $planDisplayName
     *
     * @return $this
     */
    public function setPlanDisplayName(?string $planDisplayName): self
    {
        $this->planDisplayName = $planDisplayName;

        return $this;
    }
}
