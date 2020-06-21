<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class SnakeCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class SnakeCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return SnakeCased::class;
    }

    /**
     * @return string[]
     */
    protected function examples(): array
    {
        return [
            "\n" => "\n",
            '' => '',
            '   ' => '_',
            '_' => '_',
            '__' => '_',
            '_%%' => '_%%',
            '-' => '_',
            '--' => '_',
            '-%%' => '_%%',
            'PHP' => 'p_h_p',
            'hypertext preprocessor' => 'hypertext_preprocessor',
            'Hypertext preprocessor' => 'hypertext_preprocessor',
            'Hypertext Preprocessor' => 'hypertext_preprocessor',
            'HypertextPreprocessor' => 'hypertext_preprocessor',
            '123PHP' => '123_p_h_p',
            '123_P HP' => '123_p_h_p',
        ];
    }
}
