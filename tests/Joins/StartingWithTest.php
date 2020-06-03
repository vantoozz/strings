<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;


/**
 * Class StartingWithTest
 * @package Vantoozz\Strings\Joins
 */
final class StartingWithTest extends AbstractJoinTest
{
    /**
     * @return string
     */
    protected function joinClassName(): string
    {
        return StartingWith::class;
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
            ['abc', 'cda', 'cdabc'],
            ['ab', 'cd', 'cdab'],
            ['ab', 'xa', 'xab'],
            ['ab', 'xyzab', 'xyzab'],
            ['abcde', 'x', 'xabcde'],
            ['abcde', 'xya', 'xyabcde'],
            ['xabcde', 'x', 'xabcde'],
            ['xabcde', '', 'xabcde'],
            ['', 'xabcde', 'xabcde'],
            ['/some/path/', '/', '/some/path/'],
            ['some/path/', '/', '/some/path/'],
        ];
    }
}
