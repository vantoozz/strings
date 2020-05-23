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
        $caseToggled = [];
        $characters = preg_split('/(?<!^)(?!$)/u', $string);
        foreach ($characters as $character) {
            $caseToggled[] = $this->toggleCase($character);
        }
        return implode('', $caseToggled);
    }

    /**
     * @param string $character
     * @return string
     */
    private function toggleCase(string $character):string
    {
        $lowercased = mb_strtolower($character, 'UTF-8');
        if ($lowercased !== $character) {
            return $lowercased;
        }
        return mb_strtoupper($character, 'UTF-8');
    }
}
