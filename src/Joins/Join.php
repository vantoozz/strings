<?php declare(strict_types=1);


namespace Vantoozz\Strings\Joins;

use Stringable;

/**
 * Class Join
 * @package Vantoozz\Strings\Joins
 */
abstract class Join implements Stringable
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
        return $this->join((string)$this->one, (string)$this->two);
    }

    /**
     * @param string $one
     * @param string $two
     * @return string
     */
    abstract protected function join(string $one, string $two): string;
}
