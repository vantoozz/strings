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
        $transformed = preg_replace('/(?<!^)[A-Z]/', '_$0', $string);
        $transformed = str_replace(' ', '_', $transformed);
        $transformed = preg_replace('/_+/', '_', $transformed);
        $transformed = mb_strtolower($transformed);

        return $transformed;
    }
}
