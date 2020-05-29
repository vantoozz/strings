<?php declare(strict_types=1);

use Vantoozz\Strings\StringObject;
use Vantoozz\Strings\Transforms\Acronym;

require_once __DIR__ . '/../vendor/autoload.php';

echo new Acronym(new StringObject('PHP: Hypertext Preprocessor')) . PHP_EOL;
