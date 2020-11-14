<?php declare(strict_types=1);


use Vantoozz\Strings\Joins\EndingWith;
use Vantoozz\Strings\Transforms\Reversed;
use Vantoozz\Strings\Transforms\UpperCased;

require_once __DIR__ . '/../vendor/autoload.php';

if (version_compare(PHP_VERSION, '8.0.0') >= 0) {

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
    echo PHP_EOL;

    echo new EndingWith(new One(), new Reversed(new class {
        public function __toString(): string
        {
            return "three";
        }
    }));
}


