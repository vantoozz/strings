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
        $transformed = '';

        $words = preg_split('/[\s,_-]+/', $string);
        foreach ($words as $word) {
            $transformed .= $word[0] ?? '';
        }

        return $transformed;
    }
}
