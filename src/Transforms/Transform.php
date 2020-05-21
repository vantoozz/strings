<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

use Stringable;

/**
 * Class Transform
 * @package Vantoozz\Strings\Transforms
 */
abstract class Transform implements Stringable
{
    /**
     * @var Stringable
     */
    private $string;

    /**
     * Acronym constructor.
     * @param Stringable $string
     */
    public function __construct(Stringable $string)
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->transform((string)$this->string);
    }

    /**
     * @param string $string
     * @return string
     */
    abstract protected function transform(string $string): string;
}
