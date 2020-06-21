<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

use Stringable;

/**
 * Class KebabCased
 * @package Vantoozz\Strings\Transforms
 */
final class KebabCased implements Stringable
{
    /**
     * @var Stringable
     */
    private $stringable;

    /**
     * Acronym constructor.
     * @param Stringable $stringable
     */
    public function __construct(Stringable $stringable)
    {
        $this->stringable = $stringable;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return str_replace('_', '-', (string)new SnakeCased($this->stringable));
    }
}
