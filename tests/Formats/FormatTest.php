<?php declare(strict_types=1);


namespace Vantoozz\Strings\Formats;


use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\Exceptions\InvalidFormatException;
use Vantoozz\Strings\StringObject;

/**
 * Class FormatTest
 * @package Vantoozz\Strings\Formats
 */
abstract class FormatTest extends TestCase
{

    /**
     * @test
     * @dataProvider positives
     * @param string $input
     */
    public function it_accepts_well_formatted_strings(string $input)
    {
        $className = $this->className();
        static::assertSame($input, (string)new $className(new StringObject($input)));
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
        $className = $this->className();
        new $className(new StringObject($input));
    }

    /**
     * @return array
     */
    abstract public function positives(): array;

    /**
     * @return array
     */
    abstract public function negatives(): array;

    /**
     * @return string
     */
    abstract protected function className(): string;

}
