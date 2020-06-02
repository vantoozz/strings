<?php declare(strict_types=1);


namespace Vantoozz\Strings;

use Stringable;

/**
 * Class EndingWith
 * @package Vantoozz\Strings
 */
final class EndingWith implements Stringable
{

    /**
     * @var Stringable
     */
    private $string;
    /**
     * @var Stringable
     */
    private $ending;

    /**
     * EndingWith constructor.
     * @param Stringable $string
     * @param Stringable $ending
     */
    public function __construct(Stringable $string, Stringable $ending)
    {
        $this->string = $string;
        $this->ending = $ending;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $string = (string)$this->string;
        $ending = (string)$this->ending;

        return mb_substr($string, 0, strcspn($string, $ending)) . $ending;
    }
}
