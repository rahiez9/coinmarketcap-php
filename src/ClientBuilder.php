<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\HttpFactory;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Tigusigalpa\CoinMarketCap\Http\HttpClient;

class ClientBuilder
{
    private ?string $apiKey = null;
    private string $baseUrl = 'https://pro-api.coinmarketcap.com';
    private int $timeout = 30;
    private ?ClientInterface $httpClient = null;
    private ?RequestFactoryInterface $requestFactory = null;
    private ?StreamFactoryInterface $streamFactory = null;

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = rtrim($baseUrl, '/');

        return $this;
    }

    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function useSandbox(): self
    {
        $this->baseUrl = 'https://sandbox-api.coinmarketcap.com';

        return $this;
    }

    public function setHttpClient(ClientInterface $httpClient): self
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    public function setRequestFactory(RequestFactoryInterface $requestFactory): self
    {
        $this->requestFactory = $requestFactory;

        return $this;
    }

    public function setStreamFactory(StreamFactoryInterface $streamFactory): self
    {
        $this->streamFactory = $streamFactory;

        return $this;
    }

    public function build(): Client
    {
        if ($this->apiKey === null) {
            throw new \InvalidArgumentException('API key is required');
        }

        $httpClient = $this->httpClient ?? new GuzzleClient(['timeout' => $this->timeout]);
        $requestFactory = $this->requestFactory ?? new HttpFactory();
        $streamFactory = $this->streamFactory ?? new HttpFactory();

        $client = new HttpClient(
            $httpClient,
            $requestFactory,
            $streamFactory,
            $this->baseUrl,
            $this->apiKey,
            $this->timeout
        );

        return new Client($client);
    }
}
