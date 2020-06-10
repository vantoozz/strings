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
    private $right;

    /**
     * @var Stringable
     */
    private $left;

    /**
     * StartingWith constructor.
     * @param Stringable $right
     * @param Stringable $left
     */
    public function __construct(Stringable $right, Stringable $left)
    {
        $this->right = $right;
        $this->left = $left;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)new EndingWith($this->left, $this->right);
    }
}
