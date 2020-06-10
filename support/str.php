<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use Stringable;

/**
 * @param string $string
 * @return Stringable
 */
function str(string $string): Stringable
{
    return new class ($string) implements Stringable {
        /**
         * @var string
         */
        private $string;

        /**
         * @param string $string
         */
        public function __construct(string $string)
        {
            $this->string = $string;
        }

        /**
         * @return string
         */
        public function __toString(): string
        {
            return $this->string;
        }
    };
}
