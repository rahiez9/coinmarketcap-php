<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Exception;

class NotFoundException extends ApiException
{
    public function __construct(
        string $message = 'Resource not found.',
        ?array $response = null
    ) {
        parent::__construct($message, 404, $response);
    }
}
