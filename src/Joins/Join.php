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
    private $left;

    /**
     * @var Stringable
     */
    private $right;

    /**
     * Joined constructor.
     * @param Stringable $left
     * @param Stringable $right
     */
    public function __construct(Stringable $left, Stringable $right)
    {
        $this->left = $left;
        $this->right = $right;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->join((string)$this->left, (string)$this->right);
    }

    /**
     * @param string $left
     * @param string $right
     * @return string
     */
    abstract protected function join(string $left, string $right): string;
}
