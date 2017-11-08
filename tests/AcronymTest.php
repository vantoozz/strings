<?php declare(strict_types = 1);

namespace Vantoozz\Strings;

use PHPUnit\Framework\TestCase;

/**
 * Class AcronymTest
 * @package Vantoozz\Strings
 */
final class AcronymTest extends TestCase
{
    /**
     * @test
     * @dataProvider examplesProvider
     * @param string $input
     * @param string $output
     */
    public function it_works(string $input, string $output)
    {
        $this->assertEquals($output, (string)new Acronym($input));
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return [
            ['hello', 'h'],
            ['PHP: Hypertext Preprocessor', 'PHP'],
            ['PHP: hypertext preprocessor', 'Php'],
        ];
    }
}
