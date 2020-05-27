<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class Sha256Test
 * @package Vantoozz\Strings\Formats
 */
final class Sha256Test extends FormatTest
{

    /**
     * @return string
     */
    protected function className(): string
    {
        return Sha256::class;
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['66d6769cb2c08106e8293b48415ab40ae9b7cc4e66d6769cb2c08106e8293b48'],
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
            ['z6d6769cb2c08106e8293b48415ab40ae9b7cc4e66d6769cb2c08106e8293b48'],
            ['6Ad6769cb2c08106e8293b48415ab40ae9b7cc4e66d6769cb2c08106e8293b48'],
            ['66d6769cb2c08106e8293b48415ab40ae9b7cc4e66d6769cb2c08106e8293b4'],
            ['66d6769cb2c08106e8293b48415ab40ae9b7cc4e66d6769cb2c08106e8293b481'],
        ];
    }
}
