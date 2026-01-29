<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Http;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Tigusigalpa\CoinMarketCap\Exception\ApiException;
use Tigusigalpa\CoinMarketCap\Exception\AuthenticationException;
use Tigusigalpa\CoinMarketCap\Exception\InvalidRequestException;
use Tigusigalpa\CoinMarketCap\Exception\NotFoundException;
use Tigusigalpa\CoinMarketCap\Exception\RateLimitException;

class HttpClient
{
    public function __construct(
        private readonly ClientInterface $httpClient,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory,
        private readonly string $baseUrl,
        private readonly string $apiKey,
        private readonly int $timeout = 30
    ) {
    }

    public function get(string $endpoint, array $params = []): array
    {
        $url = $this->buildUrl($endpoint, $params);
        $request = $this->requestFactory->createRequest('GET', $url)
            ->withHeader('X-CMC_PRO_API_KEY', $this->apiKey)
            ->withHeader('Accept', 'application/json');

        try {
            $response = $this->httpClient->sendRequest($request);
            $statusCode = $response->getStatusCode();
            $body = (string) $response->getBody();
            $data = json_decode($body, true);

            if ($statusCode >= 400) {
                $this->handleError($statusCode, $data);
            }

            return $data;
        } catch (\Throwable $e) {
            if ($e instanceof ApiException) {
                throw $e;
            }

            throw new ApiException(
                'HTTP request failed: ' . $e->getMessage(),
                0,
                null,
                $e
            );
        }
    }

    public function post(string $endpoint, array $data = []): array
    {
        $url = $this->baseUrl . $endpoint;
        $body = $this->streamFactory->createStream(json_encode($data));

        $request = $this->requestFactory->createRequest('POST', $url)
            ->withHeader('X-CMC_PRO_API_KEY', $this->apiKey)
            ->withHeader('Accept', 'application/json')
            ->withHeader('Content-Type', 'application/json')
            ->withBody($body);

        try {
            $response = $this->httpClient->sendRequest($request);
            $statusCode = $response->getStatusCode();
            $responseBody = (string) $response->getBody();
            $responseData = json_decode($responseBody, true);

            if ($statusCode >= 400) {
                $this->handleError($statusCode, $responseData);
            }

            return $responseData;
        } catch (\Throwable $e) {
            if ($e instanceof ApiException) {
                throw $e;
            }

            throw new ApiException(
                'HTTP request failed: ' . $e->getMessage(),
                0,
                null,
                $e
            );
        }
    }

    private function buildUrl(string $endpoint, array $params): string
    {
        $url = $this->baseUrl . $endpoint;

        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }

        return $url;
    }

    private function handleError(int $statusCode, ?array $response): void
    {
        $message = $response['status']['error_message'] ?? 'Unknown error';

        match ($statusCode) {
            400 => throw new InvalidRequestException($message, $response),
            401 => throw new AuthenticationException($message, $response),
            404 => throw new NotFoundException($message, $response),
            429 => throw new RateLimitException(
                $message,
                $response['status']['retry_after'] ?? null,
                $response
            ),
            default => throw new ApiException($message, $statusCode, $response),
        };
    }
}
