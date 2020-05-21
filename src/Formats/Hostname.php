<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Hostname
 * @package Vantoozz\Strings\Formats
 */
final class Hostname extends Format
{
    /**
     * @param string $string
     * @return bool
     */
    protected function valid(string $string): bool
    {
        return false !== filter_var($string, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME);
    }
}
