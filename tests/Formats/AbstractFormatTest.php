<?php declare(strict_types=1);


namespace Vantoozz\Strings\Formats;


use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\Exceptions\InvalidFormatException;
use Vantoozz\Strings\StringObject;

/**
 * Class AbstractFormatTest
 * @package Vantoozz\Strings\Formats
 */
abstract class AbstractFormatTest extends TestCase
{

    /**
     * @test
     * @dataProvider positiveExamples
     * @param string $input
     */
    public function it_accepts_well_formatted_strings(string $input)
    {
        $className = $this->className();
        static::assertSame($input, (string)new $className(new StringObject($input)));
    }


    /**
     * @test
     * @dataProvider negativeExamples
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
    public function positiveExamples(): array
    {
        return array_map(static function (string $example){
            return [$example];
        }, $this->positives());
    }

    /**
     * @return array
     */
    public function negativeExamples(): array
    {
        return array_map(static function (string $example){
            return [$example];
        }, $this->negatives());
    }


    /**
     * @return string
     */
    abstract protected function className(): string;

    /**
     * @return string[]
     */
    abstract protected function positives(): array;

    /**
     * @return string[]
     */
    abstract protected function negatives(): array;

}
