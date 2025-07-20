<?php

namespace Gendiff\Formatters;

use function Functional\flatten;
use function Gendiff\Formatters\Stylish\getStylishFormat;
use function Gendiff\Formatters\Plain\getPlainFormat;
use function Gendiff\Formatters\Json\getJsonFormat;

function getFormattedDiff(array $diffSource, string $formatName): string
{
    return match ($formatName) {
        'stylish' => getStylishFormat($diffSource),
        'plain' => getPlainFormat($diffSource),
        'json' => getJsonFormat($diffSource),
        default => throw new \RuntimeException("Unknown data format: \"{$formatName}\""),
    };
}
