<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class Acronym
 * @package Vantoozz\Strings\Transforms
 */
final class Acronym extends Transform
{
    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        $words = preg_split('/[\s,_-]+/', $string);

        $result = '';
        foreach ($words as $word) {
            $result .= $word[0] ?? '';
        }

        return $result;
    }
}
