<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class HostnameTest
 * @package Vantoozz\Strings\Formats
 */
final class HostnameTest extends FormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Hostname::class;
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['google.com'],
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
            ['inbox@example.com'],
        ];
    }
}