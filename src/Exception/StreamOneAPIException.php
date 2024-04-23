<?php

namespace Inserve\StreamOneAPI\Exception;

use Exception;
use Inserve\StreamOneAPI\Models\ErrorResponse;

/**
 *
 */
class StreamOneAPIException extends Exception
{
    /**
     * @param string             $message
     * @param int                $code
     * @param ErrorResponse|null $errorResponse
     */
    public function __construct(string $message = '', int $code = 0, protected ?ErrorResponse $errorResponse = null)
    {
        parent::__construct($message, $code);
    }
}
