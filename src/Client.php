<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap;

use Tigusigalpa\CoinMarketCap\Api\Cryptocurrency;
use Tigusigalpa\CoinMarketCap\Api\Exchange;
use Tigusigalpa\CoinMarketCap\Api\GlobalMetrics;
use Tigusigalpa\CoinMarketCap\Api\Tools;
use Tigusigalpa\CoinMarketCap\Http\HttpClient;

class Client
{
    private ?Cryptocurrency $cryptocurrency = null;
    private ?Exchange $exchange = null;
    private ?GlobalMetrics $globalMetrics = null;
    private ?Tools $tools = null;

    public function __construct(
        private readonly HttpClient $httpClient
    ) {
    }

    public function cryptocurrency(): Cryptocurrency
    {
        if ($this->cryptocurrency === null) {
            $this->cryptocurrency = new Cryptocurrency($this->httpClient);
        }

        return $this->cryptocurrency;
    }

    public function exchange(): Exchange
    {
        if ($this->exchange === null) {
            $this->exchange = new Exchange($this->httpClient);
        }

        return $this->exchange;
    }

    public function globalMetrics(): GlobalMetrics
    {
        if ($this->globalMetrics === null) {
            $this->globalMetrics = new GlobalMetrics($this->httpClient);
        }

        return $this->globalMetrics;
    }

    public function tools(): Tools
    {
        if ($this->tools === null) {
            $this->tools = new Tools($this->httpClient);
        }

        return $this->tools;
    }
}
