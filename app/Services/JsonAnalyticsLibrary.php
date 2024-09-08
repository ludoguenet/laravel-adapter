<?php

declare(strict_types=1);

namespace App\Services;

class JsonAnalyticsLibrary
{
    public function analyze(string $jsonData): string
    {
        dump($jsonData);

        return 'Analyze de données json';
    }
}
