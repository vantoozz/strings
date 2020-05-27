<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class MacTest
 * @package Vantoozz\Strings\Formats
 */
final class MacTest extends FormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Mac::class;
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['AA-BB-CC-DD-EE-FF'],
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
        ];
    }
}
