<?php declare(strict_types=1);

use Vantoozz\Strings\Joins\EndingWith;
use Vantoozz\Strings\Joins\Joined;
use Vantoozz\Strings\Joins\StartingWith;
use Vantoozz\Strings\StringObject;

require_once __DIR__ . '/../vendor/autoload.php';

$one = new StringObject('aabbc');
$two = new StringObject('ccddaa');

echo new Joined($one, $two) . PHP_EOL;
echo new EndingWith($one, $two) . PHP_EOL;
echo new StartingWith($one, $two) . PHP_EOL;
