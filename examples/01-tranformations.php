<?php declare(strict_types=1);

use Vantoozz\Strings\Transforms\Acronym;
use Vantoozz\Strings\Transforms\CaseToggled;
use Vantoozz\Strings\Transforms\Reversed;
use Vantoozz\Strings\Transforms\SnakeCased;

use function Vantoozz\Strings\str;

require_once __DIR__ . '/../vendor/autoload.php';

$string = str('PHP: Hypertext Preprocessor');

echo new Acronym($string) . PHP_EOL;
echo new CaseToggled($string) . PHP_EOL;
echo new Reversed($string) . PHP_EOL;
echo new SnakeCased($string) . PHP_EOL;
