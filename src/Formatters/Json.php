<?php

namespace Gendiff\Formatters\Json;

function getJsonFormat(array $tree): string
{
    return json_encode($tree);
}