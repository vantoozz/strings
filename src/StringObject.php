<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use Stringable;

/**
 * Class StringObject
 * @package Vantoozz\Strings
 */
final class StringObject implements Stringable
{
    /**
     * @var string
     */
    private $string;

    /**
     * StringObject constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->string;
    }
}
