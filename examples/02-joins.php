<?php declare(strict_types=1);

use Vantoozz\Strings\Joins\EndingWith;
use Vantoozz\Strings\Joins\Joined;
use Vantoozz\Strings\Joins\StartingWith;

use function Vantoozz\Strings\string;

require_once __DIR__ . '/../vendor/autoload.php';

$one = string('aabbc');
$two = string('ccddaa');

echo new Joined($one, $two) . PHP_EOL;
echo new EndingWith($one, $two) . PHP_EOL;
echo new StartingWith($one, $two) . PHP_EOL;
