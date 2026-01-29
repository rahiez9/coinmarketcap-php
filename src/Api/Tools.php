<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Api;

use Tigusigalpa\CoinMarketCap\Http\HttpClient;

class Tools
{
    public function __construct(
        private readonly HttpClient $httpClient
    ) {
    }

    public function priceConversion(array $params = []): array
    {
        return $this->httpClient->get('/v2/tools/price-conversion', $params);
    }
}
