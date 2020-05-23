<?php declare(strict_types = 1);

namespace Vantoozz\Strings\Transforms;

use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\StringObject;

/**
 * Class CaseToggledTest
 * @package Vantoozz\Strings\Transforms
 */
final class CaseToggledTest extends TestCase
{
    /**
     * @test
     * @dataProvider examplesProvider
     * @param string $input
     * @param string $output
     */
    public function it_works(string $input, string $output)
    {
        $this->assertEquals($output, (string)new CaseToggled(new StringObject($input)));
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return [
            ['hello', 'HELLO'],
            ['', ''],
            ['   ', '   '],
            ['PHP: Hypertext Preprocessor', 'php: hYPERTEXT pREPROCESSOR'],
            ['Český', 'čESKÝ'],
            ['Русский', 'рУССКИЙ'],
            ['中文', '中文'],
            ['+-aaa==zzz$%', '+-AAA==ZZZ$%'],
        ];
    }
}
