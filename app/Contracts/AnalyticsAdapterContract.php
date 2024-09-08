<?php

declare(strict_types=1);

namespace App\Contracts;

interface AnalyticsAdapterContract
{
    public function analyze(string $xmlData): string;
}
