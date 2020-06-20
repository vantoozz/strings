<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class UpperCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class UpperCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return UpperCased::class;
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
            'HELLO' => 'HELLO',
            'PHP: Hypertext Preprocessor' => 'PHP: HYPERTEXT PREPROCESSOR',
            'Český' => 'ČESKÝ',
            'Русский' => 'РУССКИЙ',
            '中文' => '中文',
            '+-aaa==ZZZ$%' => '+-AAA==ZZZ$%',
        ];
    }
}
