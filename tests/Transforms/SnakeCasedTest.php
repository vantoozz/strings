<?php declare(strict_types = 1);

namespace Vantoozz\Strings\Transforms;

use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\StringObject;

/**
 * Class SnakeCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class SnakeCasedTest extends TestCase
{
    /**
     * @test
     * @dataProvider examplesProvider
     * @param string $input
     * @param string $output
     */
    public function it_works(string $input, string $output)
    {
        $this->assertEquals($output, (string)new SnakeCased(new StringObject($input)));
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return [
            ['PHP', 'P_H_P'],
            ['hypertext preprocessor', 'hypertext_preprocessor'],
            ['Hypertext preprocessor', 'Hypertext_preprocessor'],
            ['Hypertext Preprocessor', 'Hypertext_Preprocessor'],
            ['HypertextPreprocessor', 'Hypertext_Preprocessor'],
        ];
    }
}
