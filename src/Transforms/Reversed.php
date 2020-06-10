<?php declare(strict_types=1);


namespace Vantoozz\Strings\Transforms;

/**
 * Class Reversed
 * @package Vantoozz\Strings\Transforms
 */
final class Reversed extends Transform
{

    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        $chars = preg_split('/(?<!^)(?!$)/u', $string);

        return implode('', array_reverse($chars));
    }
}
