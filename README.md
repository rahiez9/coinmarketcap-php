# CoinMarketCap API Client for Laravel & PHP

![CoinMarketCap PHP SDK](https://github.com/user-attachments/assets/23b58c63-2624-4689-9f21-2566184e4608)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tigusigalpa/coinmarketcap.svg?style=flat-square)](https://packagist.org/packages/tigusigalpa/coinmarketcap)
[![Total Downloads](https://img.shields.io/packagist/dt/tigusigalpa/coinmarketcap.svg?style=flat-square)](https://packagist.org/packages/tigusigalpa/coinmarketcap)
[![License](https://img.shields.io/packagist/l/tigusigalpa/coinmarketcap.svg?style=flat-square)](https://packagist.org/packages/tigusigalpa/coinmarketcap)

**Professional CoinMarketCap API v1 Integration for Laravel & PHP Applications**

A modern, production-ready PHP Composer package that provides seamless integration with the CoinMarketCap cryptocurrency
API. Built specifically for Laravel developers who need reliable access to real-time cryptocurrency prices, market data,
exchange information, and blockchain analytics. This package simplifies cryptocurrency data integration, making it easy
to build crypto portfolio trackers, trading dashboards, price alert systems, and blockchain analytics platforms.

## 🌟 Why Choose This CoinMarketCap PHP Client?

Whether you're building a cryptocurrency portfolio tracker, a crypto trading bot, a blockchain analytics dashboard, or
integrating real-time Bitcoin and Ethereum prices into your Laravel application, this package provides everything you
need:

- **Production-Ready**: Battle-tested code with comprehensive error handling for cryptocurrency API integration
- **Developer-Friendly**: Intuitive fluent interface designed specifically for Laravel and PHP developers
- **Type-Safe**: Full PHP 8.1+ type hints and DTO models for cryptocurrency data structures
- **Well-Documented**: Extensive documentation with real-world cryptocurrency integration examples
- **Actively Maintained**: Regular updates to support the latest CoinMarketCap API features and Laravel versions
- **Performance Optimized**: Efficient HTTP client implementation for fast cryptocurrency data retrieval
- **Flexible Architecture**: Works standalone or integrates seamlessly with Laravel's service container

## 📊 What Can You Build?

This CoinMarketCap API wrapper enables you to create:

- **Cryptocurrency Portfolio Trackers** - Track Bitcoin, Ethereum, and 10,000+ cryptocurrencies in real-time
- **Crypto Price Alert Systems** - Monitor cryptocurrency prices and send notifications
- **Trading Dashboards** - Display live crypto market data, charts, and trading volumes
- **Blockchain Analytics Platforms** - Analyze cryptocurrency market trends and dominance
- **DeFi Applications** - Integrate cryptocurrency price feeds for DeFi protocols
- **Crypto News Portals** - Show real-time cryptocurrency prices alongside news
- **Exchange Comparison Tools** - Compare cryptocurrency prices across different exchanges
- **Market Research Tools** - Access historical cryptocurrency data for analysis
- **Crypto Converter Apps** - Convert between different cryptocurrencies and fiat currencies
- **Investment Analysis Tools** - Track cryptocurrency market capitalization and performance

## ✨ Key Features

### Core Functionality

- 🚀 **Modern PHP 8.1+** - Leverages latest PHP features including strict types, readonly properties, and enums
- 🎯 **PSR-18 HTTP Client** - Standard-compliant HTTP client abstraction for maximum flexibility
- 🏗️ **Fluent ClientBuilder** - Elegant, chainable API for easy client configuration
- 📦 **Laravel Integration** - Native Service Provider, Facade, and dependency injection support
- 🔒 **Type-safe DTO Models** - Strongly-typed data transfer objects for all cryptocurrency responses
- ⚡ **Smart Exception Handling** - Custom exceptions for rate limits, authentication, and API errors
- 🧪 **Full Test Coverage** - Comprehensive PHPUnit test suite for reliability
- 📊 **PHPStan Level 8** - Maximum static analysis for code quality
- 🎨 **PSR-12 Code Style** - Industry-standard PHP coding conventions

### Cryptocurrency API Coverage

- 📈 **Real-time Cryptocurrency Prices** - Get live Bitcoin, Ethereum, and altcoin prices
- 💰 **Market Capitalization Data** - Access market cap rankings for 10,000+ cryptocurrencies
- 📊 **Historical Price Data** - Retrieve historical cryptocurrency quotes and OHLCV data
- 🔄 **Price Conversion Tools** - Convert between cryptocurrencies and fiat currencies
- 🏆 **Trending Cryptocurrencies** - Track trending coins, gainers, and losers
- 🏷️ **Cryptocurrency Metadata** - Get logos, descriptions, websites, and social links
- 📉 **OHLCV Data** - Access Open, High, Low, Close, Volume data for technical analysis

### Exchange & Market Data

- 🏦 **Exchange Information** - Data for 300+ cryptocurrency exchanges
- 💱 **Trading Pairs** - Access market pairs and trading volume data
- 🌍 **Global Market Metrics** - Total market cap, Bitcoin dominance, and market statistics
- 📊 **Exchange Rankings** - Sort exchanges by volume, liquidity, and other metrics

### Developer Experience

- 🔧 **Easy Installation** - Simple Composer installation for Laravel and standalone PHP
- 📚 **Extensive Documentation** - Detailed guides and real-world code examples
- 🧩 **Modular Architecture** - Clean separation of concerns for maintainability
- 🔌 **Dependency Injection** - Full Laravel service container integration
- ⚙️ **Configurable** - Flexible configuration via .env and config files
- 🧪 **Sandbox Mode** - Test your integration without using production API credits
- 🚦 **Rate Limit Handling** - Automatic detection and graceful handling of API limits

## Requirements

- PHP 8.1 or higher
- Laravel 10.x or 11.x
- CoinMarketCap API key ([Get one here](https://coinmarketcap.com/api/))

## 📦 Installation Guide

### Step 1: Install via Composer

Install the CoinMarketCap API client package using Composer in your Laravel or PHP project:

```bash
composer require tigusigalpa/coinmarketcap
```

The package will automatically register itself in Laravel applications through package auto-discovery.

### Step 2: Get Your CoinMarketCap API Key

Before you can use this package, you need a CoinMarketCap API key:

1. Visit [CoinMarketCap API Portal](https://coinmarketcap.com/api/)
2. Sign up for a free account (Basic plan includes 10,000 API calls/month)
3. Navigate to your API dashboard
4. Copy your API key

**API Plans Available:**

- **Basic (Free)** - 10,000 calls/month, perfect for development and small projects
- **Hobbyist** - 30,000 calls/month for personal crypto projects
- **Startup** - 100,000 calls/month for growing applications
- **Standard** - 300,000 calls/month for production applications
- **Professional** - 1,000,000+ calls/month for enterprise solutions

### Step 3: Publish Configuration (Laravel)

For Laravel applications, publish the configuration file to customize settings:

```bash
php artisan vendor:publish --tag=coinmarketcap-config
```

This creates a `config/coinmarketcap.php` file in your Laravel application where you can configure:

- API authentication settings
- Base URL for production or sandbox environments
- Request timeout values
- Default conversion currencies

### Step 4: Configure Environment Variables

Add your CoinMarketCap API credentials to your `.env` file:

```env
# CoinMarketCap API Configuration
COINMARKETCAP_API_KEY=your-api-key-here
COINMARKETCAP_BASE_URL=https://pro-api.coinmarketcap.com
COINMARKETCAP_TIMEOUT=30
COINMARKETCAP_USE_SANDBOX=false
```

**Configuration Options Explained:**

- `COINMARKETCAP_API_KEY` - Your CoinMarketCap API key (required)
- `COINMARKETCAP_BASE_URL` - API endpoint URL (default: production)
- `COINMARKETCAP_TIMEOUT` - Request timeout in seconds (default: 30)
- `COINMARKETCAP_USE_SANDBOX` - Use sandbox for testing (default: false)

### Step 5: Clear Configuration Cache (Laravel)

After updating your `.env` file, clear Laravel's configuration cache:

```bash
php artisan config:clear
```

### Standalone PHP Installation

For non-Laravel PHP projects, you can use the package without any configuration files:

```php
use Tigusigalpa\CoinMarketCap\ClientBuilder;

$client = (new ClientBuilder())
    ->setApiKey('your-coinmarketcap-api-key')
    ->build();
```

### Verify Installation

Test your installation with a simple API call:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

// Get Bitcoin price
$bitcoin = CoinMarketCap::cryptocurrency()->quotesLatest([
    'symbol' => 'BTC',
    'convert' => 'USD'
]);

echo "Bitcoin Price: $" . $bitcoin['data']['BTC']['quote']['USD']['price'];
```

## Quick Start

### Using Facade (Recommended for Laravel)

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

// Get top 10 cryptocurrencies
$listings = CoinMarketCap::cryptocurrency()->listingsLatest([
    'start' => 1,
    'limit' => 10,
    'convert' => 'USD'
]);

// Get Bitcoin and Ethereum quotes
$quotes = CoinMarketCap::cryptocurrency()->quotesLatest([
    'symbol' => 'BTC,ETH',
    'convert' => 'USD'
]);
```

### Using Dependency Injection

```php
use Tigusigalpa\CoinMarketCap\Client;

class CryptoController extends Controller
{
    public function __construct(private Client $client)
    {
    }

    public function index()
    {
        $listings = $this->client->cryptocurrency()->listingsLatest([
            'limit' => 10
        ]);
        
        return view('crypto.index', compact('listings'));
    }
}
```

### Standalone Usage (Outside Laravel)

```php
use Tigusigalpa\CoinMarketCap\ClientBuilder;

$client = (new ClientBuilder())
    ->setApiKey('your-api-key')
    ->setBaseUrl('https://pro-api.coinmarketcap.com')
    ->setTimeout(30)
    ->build();

$quote = $client->cryptocurrency()->quotesLatest([
    'symbol' => 'BTC,ETH',
    'convert' => 'USD'
]);
```

## Available API Methods

### Cryptocurrency API

| Method                    | Endpoint                                     | Description                                  |
|---------------------------|----------------------------------------------|----------------------------------------------|
| `listingsLatest()`        | `/v1/cryptocurrency/listings/latest`         | Get list of cryptocurrencies by market cap   |
| `listingsHistorical()`    | `/v1/cryptocurrency/listings/historical`     | Historical listings                          |
| `quotesLatest()`          | `/v2/cryptocurrency/quotes/latest`           | Current quotes for specific cryptocurrencies |
| `quotesHistorical()`      | `/v2/cryptocurrency/quotes/historical`       | Historical quotes                            |
| `info()`                  | `/v2/cryptocurrency/info`                    | Metadata (logos, links, description)         |
| `map()`                   | `/v1/cryptocurrency/map`                     | CoinMarketCap ID mapping                     |
| `ohlcvLatest()`           | `/v2/cryptocurrency/ohlcv/latest`            | Latest OHLCV data                            |
| `ohlcvHistorical()`       | `/v2/cryptocurrency/ohlcv/historical`        | Historical OHLCV data                        |
| `categories()`            | `/v1/cryptocurrency/categories`              | Cryptocurrency categories                    |
| `trendingLatest()`        | `/v1/cryptocurrency/trending/latest`         | Trending cryptocurrencies                    |
| `trendingGainersLosers()` | `/v1/cryptocurrency/trending/gainers-losers` | Top gainers and losers                       |

### Exchange API

| Method                | Endpoint                           | Description                         |
|-----------------------|------------------------------------|-------------------------------------|
| `listingsLatest()`    | `/v1/exchange/listings/latest`     | List of exchanges by trading volume |
| `quotesLatest()`      | `/v1/exchange/quotes/latest`       | Current exchange data               |
| `quotesHistorical()`  | `/v1/exchange/quotes/historical`   | Historical data                     |
| `info()`              | `/v1/exchange/info`                | Exchange metadata                   |
| `map()`               | `/v1/exchange/map`                 | Exchange ID mapping                 |
| `marketPairsLatest()` | `/v1/exchange/market-pairs/latest` | Exchange trading pairs              |

### Global Metrics API

| Method               | Endpoint                               | Description               |
|----------------------|----------------------------------------|---------------------------|
| `quotesLatest()`     | `/v1/global-metrics/quotes/latest`     | Current global metrics    |
| `quotesHistorical()` | `/v1/global-metrics/quotes/historical` | Historical global metrics |

### Tools API

| Method              | Endpoint                     | Description                       |
|---------------------|------------------------------|-----------------------------------|
| `priceConversion()` | `/v2/tools/price-conversion` | Convert prices between currencies |

## 💡 Real-World Usage Examples

### Example 1: Build a Cryptocurrency Portfolio Tracker

Track your crypto investments with real-time prices and calculate portfolio value:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

class CryptoPortfolioController extends Controller
{
    public function showPortfolio()
    {
        // User's cryptocurrency holdings
        $portfolio = [
            'BTC' => 0.5,      // 0.5 Bitcoin
            'ETH' => 10,       // 10 Ethereum
            'BNB' => 50,       // 50 Binance Coin
            'ADA' => 1000,     // 1000 Cardano
        ];
        
        // Get current prices for all holdings
        $quotes = CoinMarketCap::cryptocurrency()->quotesLatest([
            'symbol' => implode(',', array_keys($portfolio)),
            'convert' => 'USD'
        ]);
        
        $totalValue = 0;
        $holdings = [];
        
        foreach ($portfolio as $symbol => $amount) {
            $price = $quotes['data'][$symbol]['quote']['USD']['price'];
            $value = $amount * $price;
            $totalValue += $value;
            
            $holdings[] = [
                'name' => $quotes['data'][$symbol]['name'],
                'symbol' => $symbol,
                'amount' => $amount,
                'price' => $price,
                'value' => $value,
                'change_24h' => $quotes['data'][$symbol]['quote']['USD']['percent_change_24h']
            ];
        }
        
        return view('portfolio', compact('holdings', 'totalValue'));
    }
}
```

### Example 2: Create a Crypto Price Alert System

Monitor cryptocurrency prices and send notifications when thresholds are met:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;
use Illuminate\Support\Facades\Notification;

class CryptoPriceAlertService
{
    public function checkPriceAlerts()
    {
        // Get user-defined price alerts from database
        $alerts = PriceAlert::where('active', true)->get();
        
        // Group alerts by cryptocurrency symbol
        $symbols = $alerts->pluck('symbol')->unique()->implode(',');
        
        // Fetch current prices
        $quotes = CoinMarketCap::cryptocurrency()->quotesLatest([
            'symbol' => $symbols,
            'convert' => 'USD'
        ]);
        
        foreach ($alerts as $alert) {
            $currentPrice = $quotes['data'][$alert->symbol]['quote']['USD']['price'];
            
            // Check if price crossed threshold
            if ($alert->type === 'above' && $currentPrice >= $alert->target_price) {
                $this->sendAlert($alert, $currentPrice);
            } elseif ($alert->type === 'below' && $currentPrice <= $alert->target_price) {
                $this->sendAlert($alert, $currentPrice);
            }
        }
    }
    
    private function sendAlert($alert, $currentPrice)
    {
        Notification::send($alert->user, new CryptoPriceAlert([
            'symbol' => $alert->symbol,
            'current_price' => $currentPrice,
            'target_price' => $alert->target_price,
        ]));
        
        $alert->update(['active' => false]);
    }
}
```

### Example 3: Display Top Cryptocurrencies by Market Cap

Show the top 100 cryptocurrencies with real-time data:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

class CryptoMarketController extends Controller
{
    public function topCryptocurrencies()
    {
        $top100 = CoinMarketCap::cryptocurrency()->listingsLatest([
            'start' => 1,
            'limit' => 100,
            'convert' => 'USD',
            'sort' => 'market_cap',
            'sort_dir' => 'desc'
        ]);
        
        $cryptocurrencies = collect($top100['data'])->map(function ($crypto) {
            return [
                'rank' => $crypto['cmc_rank'],
                'name' => $crypto['name'],
                'symbol' => $crypto['symbol'],
                'price' => $crypto['quote']['USD']['price'],
                'market_cap' => $crypto['quote']['USD']['market_cap'],
                'volume_24h' => $crypto['quote']['USD']['volume_24h'],
                'change_1h' => $crypto['quote']['USD']['percent_change_1h'],
                'change_24h' => $crypto['quote']['USD']['percent_change_24h'],
                'change_7d' => $crypto['quote']['USD']['percent_change_7d'],
            ];
        });
        
        return view('crypto.market', compact('cryptocurrencies'));
    }
}
```

### Example 4: Cryptocurrency Price Converter

Build a multi-currency crypto converter:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

class CryptoConverterController extends Controller
{
    public function convert(Request $request)
    {
        $conversion = CoinMarketCap::tools()->priceConversion([
            'amount' => $request->amount,
            'symbol' => $request->from_currency,
            'convert' => $request->to_currency
        ]);
        
        $result = [
            'from' => [
                'amount' => $request->amount,
                'currency' => $request->from_currency,
            ],
            'to' => [
                'amount' => $conversion['data']['quote'][$request->to_currency]['price'],
                'currency' => $request->to_currency,
            ],
            'rate' => $conversion['data']['quote'][$request->to_currency]['price'] / $request->amount,
            'timestamp' => $conversion['data']['last_updated']
        ];
        
        return response()->json($result);
    }
}
```

### Example 5: Track Trending Cryptocurrencies

Display trending coins and biggest gainers/losers:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

class TrendingCryptoController extends Controller
{
    public function trending()
    {
        // Get trending cryptocurrencies
        $trending = CoinMarketCap::cryptocurrency()->trendingLatest([
            'limit' => 10,
            'convert' => 'USD'
        ]);
        
        // Get top gainers and losers
        $gainersLosers = CoinMarketCap::cryptocurrency()->trendingGainersLosers([
            'limit' => 10,
            'convert' => 'USD',
            'time_period' => '24h'
        ]);
        
        return view('crypto.trending', [
            'trending' => $trending['data'],
            'gainers' => $gainersLosers['data']['gainers'],
            'losers' => $gainersLosers['data']['losers']
        ]);
    }
}
```

### Example 6: Get Cryptocurrency Metadata and Information

Fetch detailed information about cryptocurrencies including logos and social links:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

$info = CoinMarketCap::cryptocurrency()->info([
    'symbol' => 'BTC,ETH,BNB',
]);

foreach ($info['data'] as $symbol => $crypto) {
    echo "Name: {$crypto['name']}\n";
    echo "Symbol: {$crypto['symbol']}\n";
    echo "Description: {$crypto['description']}\n";
    echo "Website: {$crypto['urls']['website'][0]}\n";
    echo "Logo: {$crypto['logo']}\n";
    echo "Twitter: {$crypto['urls']['twitter'][0]}\n";
}
```

### Example 7: Analyze Global Cryptocurrency Market

Get global market statistics and Bitcoin dominance:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

$metrics = CoinMarketCap::globalMetrics()->quotesLatest([
    'convert' => 'USD'
]);

$data = $metrics['data'];

$marketStats = [
    'total_market_cap' => $data['quote']['USD']['total_market_cap'],
    'total_volume_24h' => $data['quote']['USD']['total_volume_24h'],
    'btc_dominance' => $data['btc_dominance'],
    'eth_dominance' => $data['eth_dominance'],
    'active_cryptocurrencies' => $data['active_cryptocurrencies'],
    'active_exchanges' => $data['active_exchanges'],
    'active_market_pairs' => $data['active_market_pairs'],
];

return view('crypto.global-stats', compact('marketStats'));
```

### Example 8: Compare Cryptocurrency Exchanges

Get exchange data and compare trading volumes:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

class ExchangeComparisonController extends Controller
{
    public function compareExchanges()
    {
        $exchanges = CoinMarketCap::exchange()->listingsLatest([
            'limit' => 50,
            'sort' => 'volume_24h',
            'convert' => 'USD'
        ]);
        
        $exchangeData = collect($exchanges['data'])->map(function ($exchange) {
            return [
                'name' => $exchange['name'],
                'volume_24h' => $exchange['quote']['USD']['volume_24h'],
                'num_market_pairs' => $exchange['num_market_pairs'],
                'traffic_score' => $exchange['traffic_score'] ?? 0,
            ];
        });
        
        return view('crypto.exchanges', compact('exchangeData'));
    }
}
```

### Example 9: Historical Price Analysis

Retrieve historical cryptocurrency data for charts and analysis:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

class HistoricalDataController extends Controller
{
    public function getHistoricalPrices($symbol)
    {
        $historical = CoinMarketCap::cryptocurrency()->quotesHistorical([
            'symbol' => $symbol,
            'convert' => 'USD',
            'time_start' => now()->subDays(30)->timestamp,
            'time_end' => now()->timestamp,
            'interval' => 'daily'
        ]);
        
        $priceData = collect($historical['data']['quotes'])->map(function ($quote) {
            return [
                'date' => $quote['timestamp'],
                'price' => $quote['quote']['USD']['price'],
                'volume' => $quote['quote']['USD']['volume_24h'],
                'market_cap' => $quote['quote']['USD']['market_cap'],
            ];
        });
        
        return response()->json($priceData);
    }
}
```

### Example 10: Cache Cryptocurrency Data for Performance

Implement caching to reduce API calls and improve performance:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;
use Illuminate\Support\Facades\Cache;

class CachedCryptoService
{
    public function getTopCryptocurrencies($limit = 100)
    {
        $cacheKey = "crypto_top_{$limit}";
        
        return Cache::remember($cacheKey, now()->addMinutes(5), function () use ($limit) {
            return CoinMarketCap::cryptocurrency()->listingsLatest([
                'limit' => $limit,
                'convert' => 'USD'
            ]);
        });
    }
    
    public function getBitcoinPrice()
    {
        return Cache::remember('btc_price', now()->addMinutes(1), function () {
            $quote = CoinMarketCap::cryptocurrency()->quotesLatest([
                'symbol' => 'BTC',
                'convert' => 'USD'
            ]);
            
            return $quote['data']['BTC']['quote']['USD']['price'];
        });
    }
}

## 🛡️ Error Handling & Best Practices

The package provides comprehensive exception handling for all CoinMarketCap API errors:

### Exception Types

| Exception | HTTP Code | Description | Common Causes |
|-----------|-----------|-------------|---------------|
| `AuthenticationException` | 401 | Invalid or missing API key | Wrong API key, expired key |
| `RateLimitException` | 429 | API rate limit exceeded | Too many requests, plan limit reached |
| `InvalidRequestException` | 400 | Invalid request parameters | Wrong parameter format, missing required fields |
| `NotFoundException` | 404 | Resource not found | Invalid cryptocurrency ID or symbol |
| `ApiException` | Various | General API error | Network issues, server errors |

### Basic Error Handling

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;
use Tigusigalpa\CoinMarketCap\Exception\RateLimitException;
use Tigusigalpa\CoinMarketCap\Exception\AuthenticationException;
use Tigusigalpa\CoinMarketCap\Exception\InvalidRequestException;
use Tigusigalpa\CoinMarketCap\Exception\NotFoundException;
use Tigusigalpa\CoinMarketCap\Exception\ApiException;
use Illuminate\Support\Facades\Log;

try {
    $listings = CoinMarketCap::cryptocurrency()->listingsLatest([
        'limit' => 100,
        'convert' => 'USD'
    ]);
    
    // Process cryptocurrency data
    
} catch (AuthenticationException $e) {
    // Invalid API key - check your .env configuration
    Log::error('CoinMarketCap Authentication Error', [
        'message' => $e->getMessage(),
        'status_code' => $e->statusCode,
    ]);
    
    return response()->json([
        'error' => 'API authentication failed. Please check your API key.'
    ], 401);
    
} catch (RateLimitException $e) {
    // Rate limit exceeded - implement retry logic
    $retryAfter = $e->getRetryAfter();
    
    Log::warning('CoinMarketCap Rate Limit Exceeded', [
        'message' => $e->getMessage(),
        'retry_after' => $retryAfter,
    ]);
    
    return response()->json([
        'error' => 'Rate limit exceeded. Please try again later.',
        'retry_after' => $retryAfter
    ], 429);
    
} catch (InvalidRequestException $e) {
    // Invalid parameters - check your request
    Log::error('CoinMarketCap Invalid Request', [
        'message' => $e->getMessage(),
        'response' => $e->getResponse(),
    ]);
    
    return response()->json([
        'error' => 'Invalid request parameters.',
        'details' => $e->getMessage()
    ], 400);
    
} catch (NotFoundException $e) {
    // Resource not found - invalid cryptocurrency ID/symbol
    Log::warning('CoinMarketCap Resource Not Found', [
        'message' => $e->getMessage(),
    ]);
    
    return response()->json([
        'error' => 'Cryptocurrency not found.'
    ], 404);
    
} catch (ApiException $e) {
    // General API error
    Log::error('CoinMarketCap API Error', [
        'message' => $e->getMessage(),
        'status_code' => $e->statusCode,
        'response' => $e->getResponse(),
    ]);
    
    return response()->json([
        'error' => 'An error occurred while fetching cryptocurrency data.'
    ], 500);
}
```

### Advanced Error Handling with Retry Logic

Implement automatic retry for rate limit errors:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;
use Tigusigalpa\CoinMarketCap\Exception\RateLimitException;

class ResilientCryptoService
{
    public function getCryptoPricesWithRetry($symbols, $maxRetries = 3)
    {
        $attempt = 0;
        
        while ($attempt < $maxRetries) {
            try {
                return CoinMarketCap::cryptocurrency()->quotesLatest([
                    'symbol' => $symbols,
                    'convert' => 'USD'
                ]);
                
            } catch (RateLimitException $e) {
                $attempt++;
                
                if ($attempt >= $maxRetries) {
                    throw $e;
                }
                
                $retryAfter = $e->getRetryAfter() ?? 60;
                Log::info("Rate limit hit. Retrying after {$retryAfter} seconds...");
                sleep($retryAfter);
            }
        }
    }
}
```

### Graceful Degradation

Handle API failures gracefully with fallback data:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;
use Tigusigalpa\CoinMarketCap\Exception\ApiException;
use Illuminate\Support\Facades\Cache;

class CryptoServiceWithFallback
{
    public function getBitcoinPrice()
    {
        try {
            $quote = CoinMarketCap::cryptocurrency()->quotesLatest([
                'symbol' => 'BTC',
                'convert' => 'USD'
            ]);
            
            $price = $quote['data']['BTC']['quote']['USD']['price'];
            
            // Cache successful response
            Cache::put('btc_price_fallback', $price, now()->addHours(1));
            
            return $price;
            
        } catch (ApiException $e) {
            Log::error('Failed to fetch Bitcoin price', ['error' => $e->getMessage()]);
            
            // Return cached data as fallback
            return Cache::get('btc_price_fallback', 0);
        }
    }
}
```

### Monitoring API Usage

Track your API credit usage to avoid hitting limits:

```php
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

class ApiUsageMonitor
{
    public function trackApiUsage()
    {
        try {
            $response = CoinMarketCap::cryptocurrency()->listingsLatest(['limit' => 1]);
            
            $creditCount = $response['status']['credit_count'];
            $timestamp = $response['status']['timestamp'];
            
            // Log API usage
            Log::info('CoinMarketCap API Usage', [
                'credits_used' => $creditCount,
                'timestamp' => $timestamp,
            ]);
            
            // Store in database for monitoring
            ApiUsage::create([
                'credits_used' => $creditCount,
                'endpoint' => 'cryptocurrency/listings/latest',
                'called_at' => $timestamp,
            ]);
            
        } catch (\Exception $e) {
            Log::error('Failed to track API usage', ['error' => $e->getMessage()]);
        }
    }
}
```

### Common Issues and Solutions

**Issue: "Authentication failed" error**

- **Solution**: Verify your API key in `.env` file is correct
- Check that `COINMARKETCAP_API_KEY` is set properly
- Ensure no extra spaces or quotes around the API key
- Run `php artisan config:clear` after changing `.env`

**Issue: Rate limit exceeded**

- **Solution**: Implement caching to reduce API calls
- Upgrade your CoinMarketCap API plan for higher limits
- Use the sandbox environment for testing
- Implement exponential backoff retry logic

**Issue: Invalid cryptocurrency symbol**

- **Solution**: Use the `map()` endpoint to get valid symbols
- Check CoinMarketCap documentation for correct symbol format
- Use cryptocurrency ID instead of symbol for more reliability

**Issue: Timeout errors**

- **Solution**: Increase timeout in configuration
- Check your network connection
- Use asynchronous requests for multiple API calls

## 🧪 Sandbox Mode & Testing

For testing and development purposes, you can use the CoinMarketCap sandbox environment without consuming production API
credits:

### Enable Sandbox via Environment

```env
COINMARKETCAP_USE_SANDBOX=true
COINMARKETCAP_API_KEY=your-sandbox-api-key
```

### Enable Sandbox Programmatically

```php
use Tigusigalpa\CoinMarketCap\ClientBuilder;

$client = (new ClientBuilder())
    ->setApiKey('your-sandbox-api-key')
    ->useSandbox()
    ->build();

// Now all API calls will use the sandbox environment
$quotes = $client->cryptocurrency()->quotesLatest([
    'symbol' => 'BTC',
    'convert' => 'USD'
]);
```

### Sandbox Benefits

- **Free Testing**: Test your integration without using production API credits
- **Same API Structure**: Identical response format as production
- **Development Safety**: Experiment with different parameters safely
- **Rate Limit Testing**: Test rate limit handling without affecting production quota

## ⚡ Performance Optimization Tips

### 1. Implement Smart Caching

Cache cryptocurrency data to minimize API calls and improve response times:

```php
use Illuminate\Support\Facades\Cache;
use Tigusigalpa\CoinMarketCap\Facades\CoinMarketCap;

// Cache for 5 minutes
$cryptoData = Cache::remember('crypto_top_100', 300, function () {
    return CoinMarketCap::cryptocurrency()->listingsLatest([
        'limit' => 100,
        'convert' => 'USD'
    ]);
});
```

### 2. Use Batch Requests

Fetch multiple cryptocurrencies in a single API call:

```php
// Good: Single API call for multiple cryptocurrencies
$quotes = CoinMarketCap::cryptocurrency()->quotesLatest([
    'symbol' => 'BTC,ETH,BNB,ADA,XRP,SOL,DOT,DOGE',
    'convert' => 'USD'
]);

// Bad: Multiple API calls
// Don't do this - wastes API credits
foreach (['BTC', 'ETH', 'BNB'] as $symbol) {
    $quote = CoinMarketCap::cryptocurrency()->quotesLatest([
        'symbol' => $symbol
    ]);
}
```

### 3. Queue Background Jobs

Process cryptocurrency data updates in background jobs:

```php
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateCryptoPricesJob implements ShouldQueue
{
    use Queueable, InteractsWithQueue;
    
    public function handle()
    {
        $prices = CoinMarketCap::cryptocurrency()->listingsLatest([
            'limit' => 100
        ]);
        
        // Update database
        foreach ($prices['data'] as $crypto) {
            CryptoCurrency::updateOrCreate(
                ['symbol' => $crypto['symbol']],
                ['price' => $crypto['quote']['USD']['price']]
            );
        }
    }
}

// Dispatch job
UpdateCryptoPricesJob::dispatch();
```

### 4. Use Database for Historical Data

Store historical cryptocurrency data in your database:

```php
// Fetch once and store
$historical = CoinMarketCap::cryptocurrency()->quotesHistorical([
    'symbol' => 'BTC',
    'time_start' => now()->subDays(30)->timestamp,
    'interval' => 'daily'
]);

foreach ($historical['data']['quotes'] as $quote) {
    HistoricalPrice::create([
        'symbol' => 'BTC',
        'price' => $quote['quote']['USD']['price'],
        'date' => $quote['timestamp']
    ]);
}

// Query from database for charts
$chartData = HistoricalPrice::where('symbol', 'BTC')
    ->whereBetween('date', [now()->subDays(30), now()])
    ->get();
```

### 5. Optimize API Parameters

Request only the data you need:

```php
// Only fetch required fields
$listings = CoinMarketCap::cryptocurrency()->listingsLatest([
    'limit' => 10,
    'convert' => 'USD',
    'aux' => 'num_market_pairs,cmc_rank' // Only specific auxiliary fields
]);
```

## 🔍 Frequently Asked Questions (FAQ)

### General Questions

**Q: Is this package free to use?**
A: Yes, this PHP package is free and open-source under MIT license. However, you need a CoinMarketCap API key, which has
both free and paid plans.

**Q: What's the difference between this package and calling the API directly?**
A: This package provides type-safe models, automatic error handling, Laravel integration, retry logic, and a clean
developer-friendly interface that saves development time.

**Q: Can I use this package outside of Laravel?**
A: Absolutely! While optimized for Laravel, the package works perfectly in any PHP 8.1+ project using the standalone
ClientBuilder.

**Q: Does this support all CoinMarketCap API endpoints?**
A: The package covers all major cryptocurrency, exchange, global metrics, and tools endpoints. We're continuously adding
support for new endpoints.

### API & Authentication

**Q: How do I get a CoinMarketCap API key?**
A: Visit [coinmarketcap.com/api](https://coinmarketcap.com/api/), sign up for a free account, and get your API key from
the dashboard.

**Q: What are the API rate limits?**
A: The free Basic plan includes 10,000 calls/month. Paid plans offer higher limits. The package automatically handles
rate limit errors.

**Q: Can I use multiple API keys?**
A: Yes, you can create multiple client instances with different API keys using the ClientBuilder.

**Q: Is my API key secure?**
A: Yes, store your API key in the `.env` file (never commit it to version control). The package sends it securely via
HTTPS headers.

### Cryptocurrency Data

**Q: How often is cryptocurrency data updated?**
A: CoinMarketCap updates prices every 60 seconds for most cryptocurrencies. Implement caching to avoid unnecessary API
calls.

**Q: Can I get historical cryptocurrency prices?**
A: Yes, use the `quotesHistorical()` or `ohlcvHistorical()` methods to fetch historical price data.

**Q: How many cryptocurrencies are supported?**
A: CoinMarketCap tracks 10,000+ cryptocurrencies including Bitcoin, Ethereum, and all major altcoins.

**Q: Can I convert between different fiat currencies?**
A: Yes, use the `convert` parameter with currencies like USD, EUR, GBP, JPY, etc.

### Technical Questions

**Q: What PHP version is required?**
A: PHP 8.1 or higher is required to use modern PHP features like readonly properties and union types.

**Q: Does this work with Laravel 11?**
A: Yes, the package supports both Laravel 10.x and 11.x.

**Q: Can I customize the HTTP client?**
A: Yes, the package uses PSR-18 standard, allowing you to inject any compatible HTTP client.

**Q: How do I handle API errors?**
A: The package provides specific exceptions for different error types. See the Error Handling section above.

### Performance & Optimization

**Q: How can I reduce API calls?**
A: Implement caching, use batch requests, and store frequently accessed data in your database.

**Q: What's the best caching strategy?**
A: Cache cryptocurrency listings for 5 minutes, individual prices for 1 minute, and metadata for 1 hour.

**Q: Can I use this in a high-traffic application?**
A: Yes, with proper caching and a suitable CoinMarketCap API plan. Consider upgrading to Professional plan for
high-volume applications.

## 🎯 Use Cases & Industries

This CoinMarketCap API client is perfect for:

### Financial Technology (FinTech)

- **Cryptocurrency Exchanges** - Display real-time crypto prices and market data
- **Trading Platforms** - Integrate live cryptocurrency quotes for trading
- **Payment Processors** - Convert crypto to fiat currencies in real-time
- **Wallet Applications** - Show portfolio values and price changes

### Investment & Analytics

- **Portfolio Management** - Track cryptocurrency investments and performance
- **Market Analysis Tools** - Analyze crypto market trends and correlations
- **Investment Advisors** - Provide clients with crypto market insights
- **Research Platforms** - Access historical data for backtesting strategies

### Media & Content

- **Crypto News Websites** - Display live cryptocurrency prices alongside articles
- **Financial Blogs** - Show real-time market data and price widgets
- **YouTube Channels** - Create automated price tracking overlays
- **Podcasts** - Access market data for show notes and discussions

### E-commerce & Retail

- **Online Stores** - Accept cryptocurrency payments with live conversion rates
- **Pricing Tools** - Dynamic pricing based on cryptocurrency values
- **Merchant Services** - Real-time crypto payment processing
- **Gift Card Platforms** - Cryptocurrency-based gift card systems

### Education & Research

- **Educational Platforms** - Teach cryptocurrency trading and blockchain
- **University Research** - Academic studies on cryptocurrency markets
- **Trading Simulators** - Paper trading with real market data
- **Crypto Courses** - Interactive learning with live data

### Enterprise Solutions

- **Corporate Treasury** - Manage company cryptocurrency holdings
- **Accounting Software** - Track crypto assets for financial reporting
- **Tax Platforms** - Calculate cryptocurrency gains and losses
- **Compliance Tools** - Monitor crypto transactions and valuations

## 🌐 Supported Cryptocurrencies

Access data for 10,000+ cryptocurrencies including:

**Major Cryptocurrencies:**

- Bitcoin (BTC)
- Ethereum (ETH)
- Binance Coin (BNB)
- Cardano (ADA)
- Solana (SOL)
- XRP (Ripple)
- Polkadot (DOT)
- Dogecoin (DOGE)
- Avalanche (AVAX)
- Polygon (MATIC)

**DeFi Tokens:**

- Uniswap (UNI)
- Chainlink (LINK)
- Aave (AAVE)
- Maker (MKR)
- Compound (COMP)

**Stablecoins:**

- Tether (USDT)
- USD Coin (USDC)
- Binance USD (BUSD)
- DAI (DAI)

**And thousands more...**

## 🔗 Integration Examples

### WordPress Plugin Integration

```php
// WordPress plugin example
add_shortcode('crypto_price', function($atts) {
    $symbol = $atts['symbol'] ?? 'BTC';
    
    $client = (new ClientBuilder())
        ->setApiKey(get_option('coinmarketcap_api_key'))
        ->build();
    
    $quote = $client->cryptocurrency()->quotesLatest([
        'symbol' => $symbol,
        'convert' => 'USD'
    ]);
    
    $price = $quote['data'][$symbol]['quote']['USD']['price'];
    
    return sprintf('<span class="crypto-price">$%s</span>', number_format($price, 2));
});

// Usage: [crypto_price symbol="BTC"]
```

### API Endpoint for Mobile Apps

```php
// routes/api.php
Route::get('/crypto/prices', function () {
    $prices = Cache::remember('mobile_crypto_prices', 60, function () {
        return CoinMarketCap::cryptocurrency()->listingsLatest([
            'limit' => 50,
            'convert' => 'USD'
        ]);
    });
    
    return response()->json($prices);
});
```

### Webhook Integration

```php
// Send crypto price updates via webhook
class CryptoPriceWebhook
{
    public function sendPriceUpdate($symbol)
    {
        $quote = CoinMarketCap::cryptocurrency()->quotesLatest([
            'symbol' => $symbol,
            'convert' => 'USD'
        ]);
        
        $data = [
            'symbol' => $symbol,
            'price' => $quote['data'][$symbol]['quote']['USD']['price'],
            'change_24h' => $quote['data'][$symbol]['quote']['USD']['percent_change_24h'],
            'timestamp' => now()->toIso8601String()
        ];
        
        Http::post('https://your-webhook-url.com/crypto-update', $data);
    }
}
```

## 🧪 Testing & Quality Assurance

This package includes comprehensive test coverage to ensure reliability:

### Run Unit Tests

```bash
composer test
```

### Run Tests with Coverage Report

```bash
composer test-coverage
```

This generates an HTML coverage report in the `coverage/` directory.

### Run Static Analysis (PHPStan Level 8)

```bash
composer phpstan
```

PHPStan analyzes the code for type safety and potential bugs without running it.

### Fix Code Style (PSR-12)

```bash
composer cs-fix
```

Automatically formats code to follow PSR-12 standards.

### Writing Tests

When contributing, please include tests for new features:

```php
namespace Tigusigalpa\CoinMarketCap\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tigusigalpa\CoinMarketCap\ClientBuilder;

class YourFeatureTest extends TestCase
{
    public function test_your_feature_works()
    {
        $client = (new ClientBuilder())
            ->setApiKey('test-key')
            ->build();
        
        // Your test assertions
        $this->assertInstanceOf(Client::class, $client);
    }
}
```

## 🤝 Contributing to CoinMarketCap PHP Client

We welcome contributions from the cryptocurrency and PHP development community! Whether you're fixing bugs, adding new
CoinMarketCap API endpoints, improving documentation, or optimizing performance, your help is appreciated.

### How to Contribute

1. **Fork the Repository**
   ```bash
   git clone https://github.com/tigusigalpa/coinmarketcap.git
   cd coinmarketcap
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Create a Feature Branch**
   ```bash
   git checkout -b feature/add-new-endpoint
   ```

4. **Make Your Changes**
    - Write clean, well-documented code
    - Follow PSR-12 coding standards
    - Add type hints to all methods
    - Use strict types declaration

5. **Write Tests**
   ```bash
   # Add tests in tests/Unit or tests/Feature
   composer test
   ```

6. **Run Quality Checks**
   ```bash
   composer phpstan      # Static analysis
   composer cs-fix       # Code style
   composer test         # All tests
   ```

7. **Commit Your Changes**
   ```bash
   git commit -m "Add support for new CoinMarketCap endpoint"
   ```

8. **Push and Create Pull Request**
   ```bash
   git push origin feature/add-new-endpoint
   ```

### Contribution Guidelines

**Code Quality:**

- Follow PSR-12 coding standards
- Use PHP 8.1+ features (readonly properties, enums, etc.)
- Add PHPDoc blocks to all public methods
- Ensure PHPStan level 8 passes
- Write descriptive variable and method names

**Testing:**

- Write unit tests for new features
- Maintain or improve code coverage
- Test edge cases and error scenarios
- Use meaningful test method names

**Documentation:**

- Update README.md with new features
- Add code examples for new functionality
- Update CHANGELOG.md following Keep a Changelog format
- Document all public API methods

**Pull Requests:**

- Provide clear description of changes
- Reference related issues
- Include before/after examples if applicable
- Respond to code review feedback promptly

### Areas We Need Help With

- 🆕 **New API Endpoints** - Add support for additional CoinMarketCap endpoints
- 📚 **Documentation** - Improve examples and guides
- 🐛 **Bug Fixes** - Fix reported issues
- ⚡ **Performance** - Optimize API calls and caching
- 🧪 **Testing** - Increase test coverage
- 🌍 **Translations** - Translate documentation to other languages

## 🔒 Security & Vulnerability Reporting

Security is a top priority for cryptocurrency-related applications. We take all security vulnerabilities seriously.

### Reporting Security Issues

**DO NOT** create public GitHub issues for security vulnerabilities.

Instead, please email security concerns to: **sovletig@gmail.com**

Include the following information:

- Description of the vulnerability
- Steps to reproduce the issue
- Potential impact assessment
- Suggested fix (if available)

### Security Best Practices

When using this package:

1. **Protect Your API Key**
    - Never commit API keys to version control
    - Store keys in `.env` file
    - Use environment variables in production
    - Rotate keys regularly

2. **Validate User Input**
   ```php
   // Always validate cryptocurrency symbols
   $allowedSymbols = ['BTC', 'ETH', 'BNB'];
   if (!in_array($request->symbol, $allowedSymbols)) {
       abort(400, 'Invalid cryptocurrency symbol');
   }
   ```

3. **Implement Rate Limiting**
   ```php
   // Protect your endpoints
   Route::middleware('throttle:60,1')->group(function () {
       Route::get('/crypto/prices', [CryptoController::class, 'index']);
   });
   ```

4. **Use HTTPS Only**
    - All API calls are made over HTTPS
    - Never downgrade to HTTP

5. **Monitor API Usage**
    - Track API credit consumption
    - Set up alerts for unusual activity
    - Log all API errors

### Security Response Timeline

- **Initial Response**: Within 48 hours
- **Vulnerability Assessment**: Within 1 week
- **Patch Release**: As soon as possible (critical issues within 24-48 hours)
- **Public Disclosure**: After patch is released and users have time to update

## 👥 Credits & Acknowledgments

### Author

**Igor Sazonov**

- GitHub: [@tigusigalpa](https://github.com/tigusigalpa)
- Email: sovletig@gmail.com

### Contributors

This project exists thanks to all the people who contribute:

- [All Contributors](../../contributors)

### Built With

This package leverages these excellent open-source projects:

- **Laravel** - The PHP Framework for Web Artisans
- **Guzzle** - PHP HTTP client
- **PHPUnit** - Testing framework
- **PHPStan** - Static analysis tool
- **PHP-CS-Fixer** - Code style fixer

### Powered By

- **CoinMarketCap API** - Cryptocurrency market data provider

### Special Thanks

- CoinMarketCap team for providing comprehensive cryptocurrency API
- Laravel community for excellent framework and ecosystem
- PHP-FIG for PSR standards
- All developers who reported bugs and suggested improvements

## 📄 License

This CoinMarketCap API client is open-source software licensed under the **MIT License**.

```
MIT License

Copyright (c) 2026 Igor Sazonov

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
```

See the [LICENSE](LICENSE) file for the full license text.

## 🔗 Useful Links & Resources

### Official Documentation

- **[CoinMarketCap API Documentation](https://coinmarketcap.com/api/documentation/v1/)** - Official API reference
- **[CoinMarketCap API Portal](https://coinmarketcap.com/api/)** - Get your API key
- **[API Status Page](https://status.coinmarketcap.com/)** - Check API uptime

### Package Resources

- **[GitHub Repository](https://github.com/tigusigalpa/coinmarketcap)** - Source code and issues
- **[Packagist](https://packagist.org/packages/tigusigalpa/coinmarketcap)** - Composer package
- **[Changelog](CHANGELOG.md)** - Version history and updates
- **[Contributing Guide](CONTRIBUTING.md)** - How to contribute
- **[Security Policy](SECURITY.md)** - Security guidelines

### Cryptocurrency Resources

- **[CoinMarketCap](https://coinmarketcap.com/)** - Cryptocurrency prices and charts
- **[Bitcoin.org](https://bitcoin.org/)** - Learn about Bitcoin
- **[Ethereum.org](https://ethereum.org/)** - Ethereum documentation

### Development Tools

- **[PHPStan](https://phpstan.org/)** - Static analysis tool
- **[PHP-CS-Fixer](https://cs.symfony.com/)** - Code style fixer
- **[PHPUnit](https://phpunit.de/)** - Testing framework
- **[Composer](https://getcomposer.org/)** - Dependency manager

## 🏷️ Keywords & Tags

**Cryptocurrency:** Bitcoin, Ethereum, BTC, ETH, Altcoins, Crypto Prices, Cryptocurrency API, Crypto Market Data,
Digital Currency, Blockchain

**Technologies:** PHP, Laravel, Composer, PSR-18, HTTP Client, REST API, JSON API, Web Services

**Use Cases:** Crypto Portfolio, Trading Bot, Price Tracker, Market Analysis, Cryptocurrency Exchange, DeFi, Crypto
Wallet, Payment Gateway

**Features:** Real-time Prices, Historical Data, Market Cap, Trading Volume, Price Conversion, OHLCV Data, Exchange
Data, Global Metrics

---

If this package helps your project, please consider giving it a ⭐
on [GitHub](https://github.com/tigusigalpa/coinmarketcap)!
