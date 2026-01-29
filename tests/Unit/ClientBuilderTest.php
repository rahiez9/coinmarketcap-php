<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tigusigalpa\CoinMarketCap\Client;
use Tigusigalpa\CoinMarketCap\ClientBuilder;

class ClientBuilderTest extends TestCase
{
    public function test_can_build_client_with_api_key(): void
    {
        $builder = new ClientBuilder();
        $client = $builder
            ->setApiKey('test-key')
            ->build();

        $this->assertInstanceOf(Client::class, $client);
    }

    public function test_throws_exception_when_api_key_is_missing(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('API key is required');

        $builder = new ClientBuilder();
        $builder->build();
    }

    public function test_can_set_custom_base_url(): void
    {
        $builder = new ClientBuilder();
        $client = $builder
            ->setApiKey('test-key')
            ->setBaseUrl('https://custom-api.example.com')
            ->build();

        $this->assertInstanceOf(Client::class, $client);
    }

    public function test_can_use_sandbox(): void
    {
        $builder = new ClientBuilder();
        $client = $builder
            ->setApiKey('test-key')
            ->useSandbox()
            ->build();

        $this->assertInstanceOf(Client::class, $client);
    }

    public function test_can_set_timeout(): void
    {
        $builder = new ClientBuilder();
        $client = $builder
            ->setApiKey('test-key')
            ->setTimeout(60)
            ->build();

        $this->assertInstanceOf(Client::class, $client);
    }
}
