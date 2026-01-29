<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Exception;

class InvalidRequestException extends ApiException
{
    public function __construct(
        string $message = 'Invalid request parameters.',
        ?array $response = null
    ) {
        parent::__construct($message, 400, $response);
    }
}
