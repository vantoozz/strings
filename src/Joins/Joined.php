<?php declare(strict_types=1);

namespace Vantoozz\Strings\Joins;

/**
 * Class Joined
 * @package Vantoozz\Strings\Joins
 */
final class Joined extends Join
{
    /**
     * @param string $left
     * @param string $right
     * @return string
     */
    protected function join(string $left, string $right): string
    {
        return $left . $right;
    }
}
