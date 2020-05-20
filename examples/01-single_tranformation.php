<?php declare(strict_types = 1);

use Vantoozz\Strings\Acronym;
use Vantoozz\Strings\SnakeCased;
use Vantoozz\Strings\StringObject;

require_once __DIR__ . '/../vendor/autoload.php';

echo new SnakeCased(new Acronym(new StringObject('PHP: Hypertext Preprocessor'))) . PHP_EOL;
