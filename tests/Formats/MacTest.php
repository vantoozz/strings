<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class MacTest
 * @package Vantoozz\Strings\Formats
 */
final class MacTest extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function formatClassName(): string
    {
        return Mac::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            'AA-BB-CC-DD-EE-FF',
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
        ];
    }
}
