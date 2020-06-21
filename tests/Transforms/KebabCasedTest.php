<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class KebabCasedTest
 * @package Vantoozz\Strings\Transforms
 */
final class KebabCasedTest extends AbstractTransformTest
{
    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return KebabCased::class;
    }

    /**
     * @return string[]
     */
    protected function examples(): array
    {
        return [
            "\n" => "\n",
            '' => '',
            '   ' => '-',
            '_' => '-',
            '__' => '-',
            '_%%' => '-%%',
            '-' => '-',
            '--' => '-',
            '-%%' => '-%%',
            'PHP' => 'p-h-p',
            'hypertext preprocessor' => 'hypertext-preprocessor',
            'Hypertext preprocessor' => 'hypertext-preprocessor',
            'Hypertext Preprocessor' => 'hypertext-preprocessor',
            'HypertextPreprocessor' => 'hypertext-preprocessor',
            '123PHP' => '123-p-h-p',
            '123_P HP' => '123-p-h-p',
        ];
    }
}
