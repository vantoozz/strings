<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class TitleCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class TitleCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return TitleCased::class;
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
            'hypertext -preprocessor' => 'Hypertext -Preprocessor',
            'Hypertext preprocessor' => 'Hypertext Preprocessor',
            'Hypertext Preprocessor' => 'Hypertext Preprocessor',
            'HypertextPreprocessor' => 'Hypertext Preprocessor',
            'PHP: HypertextPreprocessor' => 'P H P: Hypertext Preprocessor',
            '123PHP' => '123 P H P',
            '123_P HP' => '123 P H P',
        ];
    }
}
