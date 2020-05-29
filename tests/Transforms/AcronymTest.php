<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class AcronymTest
 * @package Vantoozz\Strings\Transforms
 */
final class AcronymTest extends AbstractTransformTest
{

    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return Acronym::class;
    }

    /**
     * @return string[]
     */
    protected function examples(): array
    {
        return [
            "\n" => '',
            '' => '',
            '   ' => '',
            'hello' => 'h',
            'PHP: Hypertext Preprocessor' => 'PHP',
            'PHP: hypertext preprocessor' => 'Php',
        ];
    }
}
