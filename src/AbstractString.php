<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use Stringable;

/**
 * Class AbstractString
 * @package Vantoozz\Strings
 */
abstract class AbstractString implements Stringable
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
        return $this->toString((string)$this->string);
    }

    /**
     * @param string $string
     * @return string
     */
    abstract protected function toString(string $string): string;
}
