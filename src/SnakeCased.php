<?php declare(strict_types = 1);

namespace Vantoozz\Strings;

/**
 * Class SnakeCased
 * @package Vantoozz\Strings
 */
final class SnakeCased extends AbstractString
{
    /**
     * @param string $string
     * @return string
     */
    protected function toString(string $string): string
    {
        $string = preg_replace('/(?<!^)[A-Z]/', '_$0', $string);
        $string = str_replace(' ', '_', $string);
        $string = preg_replace('/_+/', '_', $string);

        return $string;
    }
}
