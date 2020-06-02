<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use PHPUnit\Framework\TestCase;

/**
 * Class StartingWithTest
 * @package Vantoozz\Strings
 */
final class StartingWithTest extends TestCase
{
    /**
     * @test
     * @dataProvider examplesProvider
     * @param string $string
     * @param string $ending
     * @param string $output
     */
    public function it_works(string $string, string $ending, string $output)
    {
        $this->assertEquals(
            $output,
            (string)new StartingWith(new StringObject($string), new StringObject($ending))
        );
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return [
            ['', '', ''],
            ["\n", "\n", "\n"],
            ['', "\n", "\n"],
            ['ab', 'cd', 'cdab'],
            ['ab', 'xa', 'xab'],
            ['ab', 'xyzab', 'xyzab'],
            ['abcde', 'x', 'xabcde'],
            ['xabcde', 'x', 'xabcde'],
            ['xabcde', '', 'xabcde'],
            ['', 'xabcde', 'xabcde'],
        ];
    }
}
