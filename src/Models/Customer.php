<?php

namespace Inserve\StreamOneAPI\Models;

/**
 *
 */
final class Customer
{
    protected ?string $name = null;
    protected ?string $customerOrganization = null;
    protected ?string $customerName = null;
    protected ?string $customerEmail = null;
    protected ?string $customerPhone = null;
    protected ?string $createTime = null;
    protected ?string $updateTime = null;
    protected ?string $uid = null;
    protected ?string $customerStatus = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getCustomerOrganization(): ?string
    {
        return $this->customerOrganization;
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
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    /**
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    /**
     * @return string|null
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @return string|null
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        if ($this->name === null) {
            return null;
        }

        if (preg_match('/accounts\/\d+\/customers\/(\d+)$/', $this->name, $matches)) {
            return (int) $matches[1];
        }

        return null;
    }

    /**
     * @return string|null
     */
    public function getCustomerStatus(): ?string
    {
        return $this->customerStatus;
    }

    /**
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string|null $customerOrganization
     *
     * @return $this
     */
    public function setCustomerOrganization(?string $customerOrganization): self
    {
        $this->customerOrganization = $customerOrganization;

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
     * @param string|null $customerEmail
     *
     * @return $this
     */
    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @param string|null $customerPhone
     *
     * @return $this
     */
    public function setCustomerPhone(?string $customerPhone): self
    {
        $this->customerPhone = $customerPhone;

        return $this;
    }

    /**
     * @param string|null $createTime
     *
     * @return $this
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * @param string|null $updateTime
     *
     * @return $this
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * @param string|null $uid
     *
     * @return $this
     */
    public function setUid(?string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @param string|null $customerStatus
     *
     * @return $this
     */
    public function setCustomerStatus(?string $customerStatus): self
    {
        $this->customerStatus = $customerStatus;

        return $this;
    }
}
