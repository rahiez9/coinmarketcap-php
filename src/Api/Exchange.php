<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Api;

use Tigusigalpa\CoinMarketCap\Http\HttpClient;

class Exchange
{
    public function __construct(
        private readonly HttpClient $httpClient
    ) {
    }

    public function listingsLatest(array $params = []): array
    {
        return $this->httpClient->get('/v1/exchange/listings/latest', $params);
    }

    public function quotesLatest(array $params = []): array
    {
        return $this->httpClient->get('/v1/exchange/quotes/latest', $params);
    }

    public function quotesHistorical(array $params = []): array
    {
        return $this->httpClient->get('/v1/exchange/quotes/historical', $params);
    }

    public function info(array $params = []): array
    {
        return $this->httpClient->get('/v1/exchange/info', $params);
    }

    public function map(array $params = []): array
    {
        return $this->httpClient->get('/v1/exchange/map', $params);
    }

    public function marketPairsLatest(array $params = []): array
    {
        return $this->httpClient->get('/v1/exchange/market-pairs/latest', $params);
    }
}
