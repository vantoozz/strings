<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class PascalCased
 * @package Vantoozz\Strings\Transforms
 */
final class PascalCased extends Transform
{
    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        $transformed = str_replace(['_', '-'], ' ', $string);
        $transformed = ucwords($transformed);
        $transformed = str_replace(' ', '', $transformed);

        return $transformed;
    }
}
