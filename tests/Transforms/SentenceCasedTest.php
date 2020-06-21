<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class SentenceCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class SentenceCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return SentenceCased::class;
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
            '_%%' => '%%',
            '-' => '-',
            '--' => '--',
            '-%%' => '-%%',
            'hypertext -preprocessor' => 'Hypertext -preprocessor',
            'Hypertext preprocessor' => 'Hypertext preprocessor',
            'Hypertext Preprocessor' => 'Hypertext preprocessor',
            'HypertextPreprocessor' => 'Hypertext preprocessor',
            'PHP: HypertextPreprocessor' => 'P h p: hypertext preprocessor',
            '123PHP' => '123 p h p',
            '123_P HP' => '123 p h p',
        ];
    }
}
