<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;


/**
 * Class JoinedTest
 * @package Vantoozz\Strings\Joins
 */
final class JoinedTest extends AbstractJoinTest
{
    /**
     * @return string
     */
    protected function joinClassName(): string
    {
        return Joined::class;
    }

    /**
     * @return string[][]
     */
    protected function examples(): array
    {
        return [
            ['', '', ''],
            ["\n", "\n", "\n\n"],
            ['', "\n", "\n"],
            ["\n", '', "\n"],
            ['ab', 'cd', 'abcd'],
            ['abc', 'cd', 'abccd'],
            ['abcd', 'cdef', 'abcdcdef'],
            ['abcd', 'cd', 'abcdcd'],
            ['ab', 'bcd', 'abbcd'],
            ['abcd', '', 'abcd'],
            ['', 'abcd', 'abcd'],
        ];
    }
}
