<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Api;

use Tigusigalpa\CoinMarketCap\Http\HttpClient;

class GlobalMetrics
{
    public function __construct(
        private readonly HttpClient $httpClient
    ) {
    }

    public function quotesLatest(array $params = []): array
    {
        return $this->httpClient->get('/v1/global-metrics/quotes/latest', $params);
    }

    public function quotesHistorical(array $params = []): array
    {
        return $this->httpClient->get('/v1/global-metrics/quotes/historical', $params);
    }
}
