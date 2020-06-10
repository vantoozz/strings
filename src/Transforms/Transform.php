<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

use Stringable;
use Vantoozz\Strings\Joins\StartingWith;

/**
 * Class Transform
 * @package Vantoozz\Strings\Transforms
 */
abstract class Transform implements Stringable
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
        return $this->transform((string)$this->stringable);
    }

    /**
     * @param string $string
     * @return string
     */
    abstract protected function transform(string $string): string;
}
