<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class LowerCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class LowerCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return LowerCased::class;
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
            'hello' => 'hello',
            'PHP: Hypertext Preprocessor' => 'php: hypertext preprocessor',
            'Český' => 'český',
            'Русский' => 'русский',
            '中文' => '中文',
            '+-aaa==ZZZ$%' => '+-aaa==zzz$%',
        ];
    }
}
