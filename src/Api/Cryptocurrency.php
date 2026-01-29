<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Api;

use Tigusigalpa\CoinMarketCap\Http\HttpClient;

class Cryptocurrency
{
    public function __construct(
        private readonly HttpClient $httpClient
    ) {
    }

    public function listingsLatest(array $params = []): array
    {
        return $this->httpClient->get('/v1/cryptocurrency/listings/latest', $params);
    }

    public function listingsHistorical(array $params = []): array
    {
        return $this->httpClient->get('/v1/cryptocurrency/listings/historical', $params);
    }

    public function quotesLatest(array $params = []): array
    {
        return $this->httpClient->get('/v2/cryptocurrency/quotes/latest', $params);
    }

    public function quotesHistorical(array $params = []): array
    {
        return $this->httpClient->get('/v2/cryptocurrency/quotes/historical', $params);
    }

    public function info(array $params = []): array
    {
        return $this->httpClient->get('/v2/cryptocurrency/info', $params);
    }

    public function map(array $params = []): array
    {
        return $this->httpClient->get('/v1/cryptocurrency/map', $params);
    }

    public function ohlcvLatest(array $params = []): array
    {
        return $this->httpClient->get('/v2/cryptocurrency/ohlcv/latest', $params);
    }

    public function ohlcvHistorical(array $params = []): array
    {
        return $this->httpClient->get('/v2/cryptocurrency/ohlcv/historical', $params);
    }

    public function categories(array $params = []): array
    {
        return $this->httpClient->get('/v1/cryptocurrency/categories', $params);
    }

    public function trendingLatest(array $params = []): array
    {
        return $this->httpClient->get('/v1/cryptocurrency/trending/latest', $params);
    }

    public function trendingGainersLosers(array $params = []): array
    {
        return $this->httpClient->get('/v1/cryptocurrency/trending/gainers-losers', $params);
    }
}
