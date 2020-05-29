<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Md5Test
 * @package Vantoozz\Strings\Formats
 */
final class Md5Test extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function formatClassName(): string
    {
        return Md5::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            'abc29b36f623ba82aaf6724fd3b16718',
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
            'zbc29b36f623ba82aaf6724fd3b16718',
            'ABC29b36f623ba82aaf6724fd3b16718',
            'abc29b36f623ba82aaf6724fd3b1671',
            'abc29b36f623ba82aaf6724fd3b167181',
        ];
    }
}
