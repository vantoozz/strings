<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class EmailTest
 * @package Vantoozz\Strings\Formats
 */
final class EmailTest extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Email::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            'inbox@example.com',
            'another.inbox@example.com',
            'one.more+inbox@example.com',
            '-@example.com',
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
            'inbox@_example.com',
            'inbox@-',
        ];
    }
}
