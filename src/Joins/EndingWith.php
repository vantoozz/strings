<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;

/**
 * Class EndingWith
 * @package Vantoozz\Strings\Joins
 */
final class EndingWith extends Join
{
    /**
     * @param string $left
     * @param string $right
     * @return string
     */
    protected function join(string $left, string $right): string
    {
        $chars = preg_split('/(?<!^)(?!$)/u', $left);

        $length = count($chars);
        while (0 < $length) {
            if (strncmp($right, implode('', $chars), $length) === 0) {
                return $left . mb_substr($right, $length);
            }
            array_shift($chars);
            $length--;
        }

        return $left . $right;
    }
}
