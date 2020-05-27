<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Ipv6Test
 * @package Vantoozz\Strings\Formats
 */
final class Ipv6Test extends FormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Ipv6::class;
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['0:0:0:0:0:0:0:1'],
            ['2001:0db8:85a3:0000:0000:8a2e:0370:7334'],
        ];
    }

    /**
     * @return array
     */
    public function negatives(): array
    {
        return [
            [''],
            ['0.0.0.0'],
            ['0.0.0.0'],
            ['some string'],
            ['127.0.0.1'],
            ['gggg:0db8:85a3:0000:0000:8a2e:0370:7334'],
        ];
    }
}
