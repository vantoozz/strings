<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Ipv4Test
 * @package Vantoozz\Strings\Formats
 */
final class Ipv4Test extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function formatClassName(): string
    {
        return Ipv4::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            '127.0.0.1',
            '255.255.255.255',
            '0.0.0.0',
        ];
    }

    /**
     * @return string[]
     */
    protected function negatives(): array
    {
        return [
            '',
            'some string',
            '0:0:0:0:0:0:0:1',
            '127,0,0,1',
            '999.999.999.999',
        ];
    }
}
