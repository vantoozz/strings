<?php declare(strict_types = 1);

namespace Vantoozz\Strings;

/**
 * Class AbstractString
 * @package Vantoozz\Strings
 */
abstract class AbstractString
{
    /**
     * @var string
     */
    private $string;

    /**
     * Acronym constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString($this->string);
    }

    /**
     * @param string $string
     * @return string
     */
    abstract protected function toString(string $string): string;
}
