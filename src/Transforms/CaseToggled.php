<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class CaseToggled
 * @package Vantoozz\Strings\Transforms
 */
final class CaseToggled extends Transform
{
    /**
     * @param string $string
     * @return string
     */
    protected function transform(string $string): string
    {
        $transformed = '';

        $chars = preg_split('/(?<!^)(?!$)/u', $string);
        foreach ($chars as $char) {
            $transformed .= $this->toggleCase($char);
        }

        return $transformed;
    }

    /**
     * @param string $char
     * @return string
     */
    private function toggleCase(string $char): string
    {
        $lowercased = mb_strtolower($char, 'UTF-8');
        if ($lowercased !== $char) {
            return $lowercased;
        }
        return mb_strtoupper($char, 'UTF-8');
    }
}
