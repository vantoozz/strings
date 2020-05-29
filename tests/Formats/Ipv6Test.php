<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Ipv6Test
 * @package Vantoozz\Strings\Formats
 */
final class Ipv6Test extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function formatClassName(): string
    {
        return Ipv6::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            '0:0:0:0:0:0:0:1',
            '2001:0db8:85a3:0000:0000:8a2e:0370:7334',
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
            '0.0.0.0',
            '0.0.0.0',
            '127.0.0.1',
            'gggg:0db8:85a3:0000:0000:8a2e:0370:7334',
        ];
    }
}
