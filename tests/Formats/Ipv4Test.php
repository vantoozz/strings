<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Ipv4Test
 * @package Vantoozz\Strings\Formats
 */
final class Ipv4Test extends FormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Ipv4::class;
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['127.0.0.1'],
            ['255.255.255.255'],
            ['0.0.0.0'],
        ];
    }

    /**
     * @return array
     */
    public function negatives(): array
    {
        return [
            [''],
            ['some string'],
            ['0:0:0:0:0:0:0:1'],
            ['127,0,0,1'],
            ['999.999.999.999'],
        ];
    }
}