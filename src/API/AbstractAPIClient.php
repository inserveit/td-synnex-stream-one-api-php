<?php

namespace Inserve\StreamOneAPI\API;

use Inserve\StreamOneAPI\Client\APIClient;
use SensitiveParameter;

/**
 *
 */
abstract class AbstractAPIClient
{
    /**
     * @param APIClient $apiClient
     */
    public function __construct(#[SensitiveParameter] protected APIClient $apiClient)
    {
    }
}
