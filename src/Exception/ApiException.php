<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Exception;

use Exception;
use Throwable;

class ApiException extends Exception
{
    public function __construct(
        string $message,
        public readonly int $statusCode,
        public readonly ?array $response = null,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $statusCode, $previous);
    }

    public function getResponse(): ?array
    {
        return $this->response;
    }
}
