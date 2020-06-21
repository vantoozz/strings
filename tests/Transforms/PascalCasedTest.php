<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class PascalCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class PascalCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return PascalCased::class;
    }

    /**
     * @return string[]
     */
    protected function examples(): array
    {
        return [
            "\n" => "\n",
            '' => '',
            '   ' => '',
            '_' => '',
            '__' => '',
            'PHP' => 'PHP',
            '_%%' => '%%',
            'hypertext  preprocessor' => 'HypertextPreprocessor',
            'hypertext-preprocessor' => 'HypertextPreprocessor',
            'HypertextPreprocessor' => 'HypertextPreprocessor',
            '123PHP' => '123PHP',
            '123_P HP' => '123PHP',
            '123_p hp' => '123PHp',
        ];
    }
}
