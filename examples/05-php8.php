<?php declare(strict_types=1);


use Vantoozz\Strings\Transforms\CaseToggled;
use Vantoozz\Strings\Transforms\Reversed;

require_once __DIR__ . '/../vendor/autoload.php';


class One
{
    public function __toString(): string
    {
        return "one";
    }
}

echo new Reversed(new One());
