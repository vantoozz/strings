<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;

/**
 * Class StartingWith
 * @package Vantoozz\Strings\Joins
 */
final class StartingWith extends Join
{
    /**
     * @param string $one
     * @param string $two
     * @return string
     */
    protected function join(string $one, string $two): string
    {
        return mb_substr($two, 0, strcspn($two, $one)) . $one;
    }
}
