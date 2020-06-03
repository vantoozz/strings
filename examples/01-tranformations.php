<?php declare(strict_types=1);

use Vantoozz\Strings\StringObject;
use Vantoozz\Strings\Transforms\Acronym;
use Vantoozz\Strings\Transforms\CaseToggled;
use Vantoozz\Strings\Transforms\SnakeCased;

require_once __DIR__ . '/../vendor/autoload.php';

$string = new StringObject('PHP: Hypertext Preprocessor');

echo new Acronym($string) . PHP_EOL;
echo new CaseToggled($string) . PHP_EOL;
echo new SnakeCased($string) . PHP_EOL;
