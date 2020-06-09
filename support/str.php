<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use Stringable;

/**
 * @param string $string
 * @return Stringable
 */
function string(string $string): Stringable
{
    return new StringObject($string);
}
