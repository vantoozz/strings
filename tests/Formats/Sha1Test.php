<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Sha1Test
 * @package Vantoozz\Strings\Formats
 */
final class Sha1Test extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function formatClassName(): string
    {
        return Sha1::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            '415ab40ae9b7cc4e66d6769cb2c08106e8293b48',
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
            'z15ab40ae9b7cc4e66d6769cb2c08106e8293b48',
            'A15ab40ae9b7cc4e66d6769cb2c08106e8293b48',
            '415ab40ae9b7cc4e66d6769cb2c08106e8293b4',
            '415ab40ae9b7cc4e66d6769cb2c08106e8293b481',
        ];
    }
}
