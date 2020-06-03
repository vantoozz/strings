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
        $chars = preg_split('/(?<!^)(?!$)/u', $one);

        $length = count($chars);
        while (0 < $length) {
            if (strncmp($two, implode('', $chars), $length) === 0) {
                return $one . mb_substr($two, $length);
            }
            array_shift($chars);
            $length--;
        }

        return $one . $two;
    }
}
