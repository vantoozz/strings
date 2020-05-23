<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Ipv6
 * @package Vantoozz\Strings\Formats
 */
final class Ipv6 extends Format
{
    /**
     * @param string $string
     * @return bool
     */
    protected function valid(string $string): bool
    {
        return false !== filter_var($string, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
    }
}
