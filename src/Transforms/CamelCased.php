<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

use Stringable;

/**
 * Class CamelCased
 * @package Vantoozz\Strings\Transforms
 */
final class CamelCased implements Stringable
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
        return lcfirst((string)new PascalCased($this->stringable));
    }
}
