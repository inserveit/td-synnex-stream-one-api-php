## Requirements
[![PHP Version Require](https://poser.pugx.org/inserve/td-synnex-stream-one-api-php/require/php)](https://packagist.org/packages/inserve/td-synnex-stream-one-api-php)

## Status

![workflow](https://github.com/inserveit/td-synnex-stream-one-api-php/actions/workflows/build-actions.yml/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/inserve/td-synnex-stream-one-api-php/v)](https://packagist.org/packages/inserve/td-synnex-stream-one-api-php)
[![Latest Unstable Version](https://poser.pugx.org/inserve/td-synnex-stream-one-api-php/v/unstable)](https://packagist.org/packages/inserve/td-synnex-stream-one-api-php)
[![License](https://poser.pugx.org/inserve/td-synnex-stream-one-api-php/license)](https://packagist.org/packages/inserve/td-synnex-stream-one-api-php)

# About
A PHP Wrapper for [TD Synnex Stream One API](https://www.tdsynnex.com/ion/v3api)

## Installation
`composer require inserve/td-synnex-stream-one-api-php`

## Usage example

```php
<?php

use Inserve\StreamOneAPI\StreamOneAPIClient;

require 'vendor/autoload.php';

$api = new StreamOneAPIClient();
$accessToken = $api->refreshToken('refresh.token');

if (! $accessToken) {
    echo 'Failed to obtain new access token.';

    return;
}

$customers = $api->customer->list(123);

```
