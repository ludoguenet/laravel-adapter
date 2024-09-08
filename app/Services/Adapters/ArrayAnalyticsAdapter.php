<?php

declare(strict_types=1);

namespace App\Services\Adapters;

use App\Contracts\AnalyticsAdapterContract;
use App\Services\ArrayAnalyticsLibrary;

class ArrayAnalyticsAdapter implements AnalyticsAdapterContract
{
    public function __construct(private readonly ArrayAnalyticsLibrary $library){}

    public function analyze(string $xmlData): string
    {
        $jsonData = json_decode(json_encode(simplexml_load_string($xmlData)), true);

        return $this->library->analyze($jsonData);
    }
}
