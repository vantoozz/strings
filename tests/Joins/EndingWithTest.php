<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;


/**
 * Class EndingWithTest
 * @package Vantoozz\Strings\Joins
 */
final class EndingWithTest extends AbstractJoinTest
{
    /**
     * @return string
     */
    protected function joinClassName(): string
    {
        return EndingWith::class;
    }

    /**
     * @return string[][]
     */
    protected function examples(): array
    {
        return [
            ['', '', ''],
            ["\n", "\n", "\n"],
            ['', "\n", "\n"],
            ["\n", '', "\n"],
            ['abcdedef', 'dedefghi', 'abcdedefghi'],
            ['abc', 'cda', 'abcda'],
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
            ['/some/path/', '/', '/some/path/'],
            ['/some/path', '/', '/some/path/'],
        ];
    }
}
