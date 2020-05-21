<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Sha1
 * @package Vantoozz\Strings\Formats
 */
final class Sha1 extends Format
{
    /**
     * @param string $string
     * @return bool
     */
    protected function valid(string $string): bool
    {
        return false !== (bool)preg_match('/^[a-f0-9]{40}$/', $string);
    }
}
