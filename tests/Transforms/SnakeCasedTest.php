<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

use PHPUnit\Framework\TestCase;

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
            'PHP' => 'P_H_P',
            '_%%'=>'_%%',
            'hypertext preprocessor' => 'hypertext_preprocessor',
            'Hypertext preprocessor' => 'Hypertext_preprocessor',
            'Hypertext Preprocessor' => 'Hypertext_Preprocessor',
            'HypertextPreprocessor' => 'Hypertext_Preprocessor',
        ];
    }
}
