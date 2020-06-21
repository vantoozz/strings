<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

use Stringable;

/**
 * Class TitleCased
 * @package Vantoozz\Strings\Transforms
 */
final class TitleCased implements Stringable
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
        return ucwords((string)new SentenceCased($this->stringable), ' -');
    }
}
