<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\Exceptions\InvalidFormatException;
use Vantoozz\Strings\StringObject;

/**
 * Class Ipv4Test
 * @package Vantoozz\Strings\Formats
 */
final class Ipv4Test extends TestCase
{

    /**
     * @test
     * @dataProvider positives
     * @param string $input
     */
    public function it_accepts_well_formatted_strings(string $input)
    {
        static::assertSame($input, (string)new Ipv4(new StringObject($input)));
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

        new Ipv4(new StringObject($input));
    }

    /**
     * @return array
     */
    public function positives(): array
    {
        return [
            ['127.0.0.1'],
            ['255.255.255.255'],
            ['0.0.0.0'],
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
            ['0:0:0:0:0:0:0:1'],
            ['127,0,0,1'],
            ['999.999.999.999'],
        ];
    }
}
