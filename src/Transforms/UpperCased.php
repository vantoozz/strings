<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class UpperCased
 * @package Vantoozz\Strings\Transforms
 */
final class UpperCased extends Transform
{
    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        return mb_strtoupper($string);
    }
}
