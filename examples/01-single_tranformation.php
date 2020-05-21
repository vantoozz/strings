<?php declare(strict_types = 1);

use Vantoozz\Strings\StringObject;
use Vantoozz\Strings\Transforms\Acronym;
use Vantoozz\Strings\Transforms\SnakeCased;

require_once __DIR__ . '/../vendor/autoload.php';

echo new SnakeCased(new Acronym(new StringObject('PHP: Hypertext Preprocessor'))) . PHP_EOL;
