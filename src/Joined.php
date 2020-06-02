<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use Stringable;

/**
 * Class Joined
 * @package Vantoozz\Strings
 */
final class Joined implements Stringable
{
    /**
     * @var Stringable
     */
    private $one;

    /**
     * @var Stringable
     */
    private $two;

    /**
     * Joined constructor.
     * @param Stringable $one
     * @param Stringable $two
     */
    public function __construct(Stringable $one, Stringable $two)
    {
        $this->one = $one;
        $this->two = $two;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->one . $this->two;
    }
}
