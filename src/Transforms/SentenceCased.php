<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class SentenceCased
 * @package Vantoozz\Strings\Transforms
 */
final class SentenceCased extends Transform
{
    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        $transformed = preg_replace('/(?<!^)[A-Z]/', ' $0', $string);
        $transformed = str_replace('_', ' ', $transformed);
        $transformed = preg_replace('/ +/', ' ', $transformed);
        $transformed = mb_strtolower($transformed);
        $transformed = trim($transformed, ' ');
        $transformed = ucfirst($transformed);

        return $transformed;
    }
}
