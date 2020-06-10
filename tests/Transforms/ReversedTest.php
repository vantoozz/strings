<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

/**
 * Class ReversedTest
 * @package Vantoozz\Strings\Transforms
 */
final class ReversedTest extends AbstractTransformTest
{

    /**
     * @return string
     */
    protected function transformClassName(): string
    {
        return Reversed::class;
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
            'Hello' => 'olleH',
            'Český' => 'ýkseČ',
            'Русский' => 'йикссуР',
            '中文' => '文中',
        ];
    }
}
