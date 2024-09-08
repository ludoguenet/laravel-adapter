<?php

declare(strict_types=1);

namespace App\Services\Adapters;

use App\Contracts\AnalyticsAdapterContract;
use App\Services\JsonAnalyticsLibrary;

class JsonAnalyticsAdapter implements AnalyticsAdapterContract
{
    public function __construct(private readonly JsonAnalyticsLibrary $library){}

    public function analyze(string $xmlData): string
    {
        $jsonData = json_encode(simplexml_load_string($xmlData));

        return $this->library->analyze($jsonData);
    }
}
