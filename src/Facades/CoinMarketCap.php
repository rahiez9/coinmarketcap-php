<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Facades;

use Illuminate\Support\Facades\Facade;
use Tigusigalpa\CoinMarketCap\Client;

class CoinMarketCap extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Client::class;
    }
}
