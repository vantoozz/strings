<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class CamelCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class CamelCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return CamelCased::class;
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
            'PHP' => 'pHP',
            '_%%' => '%%',
            'hypertext  preprocessor' => 'hypertextPreprocessor',
            'hypertext-preprocessor' => 'hypertextPreprocessor',
            'HypertextPreprocessor' => 'hypertextPreprocessor',
            '123PHP' => '123PHP',
            '123_P HP' => '123PHP',
            '123_p hp' => '123PHp',
        ];
    }
}
