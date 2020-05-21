<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class SnakeCased
 * @package Vantoozz\Strings\Transforms
 */
final class SnakeCased extends Transform
{
    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        $string = preg_replace('/(?<!^)[A-Z]/', '_$0', $string);
        $string = str_replace(' ', '_', $string);
        $string = preg_replace('/_+/', '_', $string);

        return $string;
    }
}
