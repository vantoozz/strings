<?php declare(strict_types = 1);

namespace Vantoozz\Strings;

/**
 * Class Acronym
 * @package Vantoozz\Strings
 */
final class Acronym extends AbstractString
{
    /**
     * @param string $string
     * @return string
     */
    protected function toString(string $string): string
    {
        $words = preg_split('/[\s,_-]+/', $string);

        $result = '';
        foreach ($words as $word) {
            $result .= $word{0};
        }

        return $result;
    }
}
