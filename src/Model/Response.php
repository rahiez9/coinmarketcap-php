<?php

declare(strict_types=1);

namespace Tigusigalpa\CoinMarketCap\Model;

class Response
{
    public function __construct(
        public readonly mixed $data,
        public readonly Status $status
    ) {
    }
}
