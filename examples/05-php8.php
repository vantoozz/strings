<?php declare(strict_types=1);


use Vantoozz\Strings\Transforms\Reversed;
use Vantoozz\Strings\Transforms\UpperCased;

require_once __DIR__ . '/../vendor/autoload.php';


class One
{
    public function __toString(): string
    {
        return "one";
    }
}

echo new Reversed(new One());

echo PHP_EOL;

echo new UpperCased(new class {
    public function __toString(): string
    {
        return "two";
    }
});
