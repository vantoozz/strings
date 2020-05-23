<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\Exceptions\InvalidFormatException;
use Vantoozz\Strings\StringObject;

/**
 * Class Ipv6Test
 * @package Vantoozz\Strings\Formats
 */
final class Ipv6Test extends TestCase
{

    /**
     * @test
     * @dataProvider positives
     * @param string $input
     */
    public function it_accepts_well_formatted_strings(string $input)
    {
        static::assertSame($input, (string)new Ipv6(new StringObject($input)));
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

        new Ipv6(new StringObject($input));
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['0:0:0:0:0:0:0:1'],
            ['2001:0db8:85a3:0000:0000:8a2e:0370:7334'],
        ];
    }

    /**
     * @return array
     */
    public function negatives(): array
    {
        return [
            [''],
            ['0.0.0.0'],
            ['0.0.0.0'],
            ['some string'],
            ['127.0.0.1'],
            ['gggg:0db8:85a3:0000:0000:8a2e:0370:7334'],
        ];
    }
}
