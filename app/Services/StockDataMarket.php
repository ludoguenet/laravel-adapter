<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\AnalyticsAdapterContract;

class StockDataMarket
{
    public function __construct(private readonly AnalyticsAdapterContract $adapter){}

    /**
     * return XML formatted data.
     */
    public function getStockDataFromApi(): string
    {
        return file_get_contents('https://mpb26eeb135b01380eba.free.beeceptor.com');
    }

    public function getArrayAnalyticsData(string $xml): string
    {
        return $this->adapter->analyze($xml);
    }

    public function getJsonAnalyticsData(string $xml): string
    {
        return $this->adapter->analyze($xml);
    }

    /**
     * Convert XML to Array.
     */
    public function processStockData(string $xml): array
    {
        $data = simplexml_load_string($xml);

        return json_decode(json_encode($data), true);
    }

    /**
     * Display charts.
     */
    public function displayChart(array $data): void
    {
        dd('display chart', $data);
    }
}