<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Model;

class Exchange
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $slug,
        public readonly int $numMarketPairs,
        public readonly string $lastUpdated,
        public readonly ?array $quote = null
    ) {
    }
}
