<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\Exceptions\InvalidFormatException;
use Vantoozz\Strings\StringObject;

/**
 * Class EmailTest
 * @package Vantoozz\Strings\Formats
 */
final class EmailTest extends TestCase
{

    /**
     * @test
     * @dataProvider positives
     * @param string $input
     */
    public function it_accepts_well_formatted_strings(string $input)
    {
        static::assertSame($input, (string)new Email(new StringObject($input)));
    }


    /**
     * @test
     * @dataProvider negatives
     * @param string $input
     */
    public function it_rejects_badly_formatted_strings(string $input)
    {
        $this->expectException(InvalidFormatException::class);
        $this->expectExceptionMessage('Invalid format');

        new Email(new StringObject($input));
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['inbox@example.com'],
            ['another.inbox@example.com'],
            ['one.more+inbox@example.com'],
            ['-@example.com'],
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
            ['inbox@_example.com'],
            ['inbox@-'],
        ];
    }
}
