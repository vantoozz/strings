<?php declare(strict_types=1);

use Vantoozz\Strings\Exceptions\InvalidFormatException;
use Vantoozz\Strings\Formats\Email;

use function Vantoozz\Strings\str;

require_once __DIR__ . '/../vendor/autoload.php';


try {
    echo new Email(str('user@example.com')) . PHP_EOL;
} catch (InvalidFormatException $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    echo new Email(str('user%example.com')) . PHP_EOL;
} catch (InvalidFormatException $e) {
    echo $e->getMessage() . PHP_EOL;
}
