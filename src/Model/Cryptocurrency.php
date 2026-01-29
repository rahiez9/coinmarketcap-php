<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Model;

class Cryptocurrency
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $symbol,
        public readonly string $slug,
        public readonly int $cmcRank,
        public readonly int $numMarketPairs,
        public readonly float $circulatingSupply,
        public readonly float $totalSupply,
        public readonly ?float $maxSupply,
        public readonly string $lastUpdated,
        public readonly string $dateAdded,
        public readonly array $tags,
        public readonly ?array $quote = null
    ) {
    }
}
