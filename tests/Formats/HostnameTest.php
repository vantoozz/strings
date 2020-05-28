<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class HostnameTest
 * @package Vantoozz\Strings\Formats
 */
final class HostnameTest extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Hostname::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            'google.com',
        ];
    }



    /**
     * @return string[]
     */
    protected function negatives(): array{
        return [
            '',
            'some string',
            'inbox@example.com'
        ];
    }
}
