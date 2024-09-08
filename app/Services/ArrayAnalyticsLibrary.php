<?php

declare(strict_types=1);

namespace App\Services;

class ArrayAnalyticsLibrary
{
    public function analyze(array $arrayData): string
    {
        dump($arrayData);

        return 'Analyze de données array';
    }
}
