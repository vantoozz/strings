<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class CaseToggledTest
 * @package Vantoozz\Strings\Transforms
 */
final class CaseToggledTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return CaseToggled::class;
    }

    /**
     * @return string[]
     */
    protected function examples(): array
    {
        return [
            "\n" => "\n",
            '' => '',
            '   ' => '   ',
            'hello' => 'HELLO',
            'PHP: Hypertext Preprocessor' => 'php: hYPERTEXT pREPROCESSOR',
            'Český' => 'čESKÝ',
            'Русский' => 'рУССКИЙ',
            '中文' => '中文',
            '+-aaa==zzz$%' => '+-AAA==ZZZ$%',
        ];
    }
}
