<?php declare(strict_types=1);


namespace Vantoozz\Strings;

use Stringable;

/**
 * Class StartingWith
 * @package Vantoozz\Strings
 */
final class StartingWith implements Stringable
{

    /**
     * @var Stringable
     */
    private $string;
    /**
     * @var Stringable
     */
    private $starting;

    /**
     * EndingWith constructor.
     * @param Stringable $string
     * @param Stringable $staring
     */
    public function __construct(Stringable $string, Stringable $staring)
    {
        $this->string = $string;
        $this->starting = $staring;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $string = (string)$this->string;
        $starting = (string)$this->starting;

        return mb_substr($starting, 0, strcspn($starting, $string)) . $string;
    }
}
