<?php

namespace Inserve\StreamOneAPI\Models;

use SensitiveParameter;

/**
 *
 */
class AccessToken
{
    protected ?string $accessToken = null;
    protected ?string $refreshToken = null;
    protected ?string $scope = null;
    protected ?int $expiresIn = null;
    protected ?string $tokenType = null;

    /**
     * @return string|null
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * @param string|null $accessToken
     *
     * @return $this
     */
    public function setAccessToken(#[SensitiveParameter] ?string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    /**
     * @param string|null $refreshToken
     *
     * @return $this
     */
    public function setRefreshToken(#[SensitiveParameter] ?string $refreshToken): self
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * @param string|null $scope
     *
     * @return $this
     */
    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    /**
     * @param int|null $expiresIn
     *
     * @return $this
     */
    public function setExpiresIn(?int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    /**
     * @param string|null $tokenType
     *
     * @return $this
     */
    public function setTokenType(?string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }
}
