<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Md5Test
 * @package Vantoozz\Strings\Formats
 */
final class Md5Test extends FormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Md5::class;
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['abc29b36f623ba82aaf6724fd3b16718'],
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
            ['zbc29b36f623ba82aaf6724fd3b16718'],
            ['ABC29b36f623ba82aaf6724fd3b16718'],
            ['abc29b36f623ba82aaf6724fd3b1671'],
            ['abc29b36f623ba82aaf6724fd3b167181'],
        ];
    }
}