<?php declare(strict_types=1);

namespace Vantoozz\Strings\Joins;

/**
 * Class Joined
 * @package Vantoozz\Strings\Joins
 */
final class Joined extends Join
{
    /**
     * @param string $one
     * @param string $two
     * @return string
     */
    protected function join(string $one, string $two): string
    {
        return $one . $two;
    }
}
