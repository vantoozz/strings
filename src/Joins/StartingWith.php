<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;

use Stringable;

/**
 * Class StartingWith
 * @package Vantoozz\Strings\Joins
 */
final class StartingWith implements Stringable
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
     * StartingWith constructor.
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
        return (string)new EndingWith($this->two, $this->one);
    }
}
