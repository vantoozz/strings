<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use PHPUnit\Framework\TestCase;

/**
 * Class EndingWithTest
 * @package Vantoozz\Strings
 */
final class EndingWithTest extends TestCase
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
            (string)new EndingWith(new StringObject($string), new StringObject($ending))
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
            ['ab', 'cd', 'abcd'],
            ['abc', 'cd', 'abcd'],
            ['abcd', 'cdef', 'abcdef'],
            ['abcd', 'cd', 'abcd'],
            ['ab', 'bcd', 'abcd'],
            ['ab', 'abcd', 'abcd'],
            ['ab', 'xyz', 'abxyz'],
            ['ab', 'bxyz', 'abxyz'],
            ['abcd', 'z', 'abcdz'],
            ['abcd', 'dz', 'abcdz'],
            ['abcd', '', 'abcd'],
            ['', 'abcd', 'abcd'],
        ];
    }
}
