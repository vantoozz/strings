<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class LowerCased
 * @package Vantoozz\Strings\Transforms
 */
final class LowerCased extends Transform
{
    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        return mb_strtolower($string);
    }
}
