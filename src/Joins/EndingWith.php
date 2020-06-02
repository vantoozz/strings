<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;

/**
 * Class EndingWith
 * @package Vantoozz\Strings\Joins
 */
final class EndingWith extends Join
{
    /**
     * @param string $one
     * @param string $two
     * @return string
     */
    protected function join(string $one, string $two): string
    {
        return mb_substr($one, 0, strcspn($one, $two)) . $two;
    }
}
