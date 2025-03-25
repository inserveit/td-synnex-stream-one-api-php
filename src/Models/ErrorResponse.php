<?php

namespace Inserve\StreamOneAPI\Models;

/**
 *
 */
final class ErrorResponse
{
    protected ?string $error = null;
    protected ?string $message = null;
    protected ?int $code = null;
    protected ?array $details = [];

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string|null $error
     *
     * @return $this
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int|null $code
     *
     * @return $this
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * @param array|null $details
     *
     * @return $this
     */
    public function setDetails(?array $details): self
    {
        $this->details = $details;

        return $this;
    }
}
