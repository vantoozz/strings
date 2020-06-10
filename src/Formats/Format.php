<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

use Stringable;
use Vantoozz\Strings\Exceptions\InvalidFormatException;

/**
 * Class ValueObject
 * @package Vantoozz\Strings\Formats
 */
abstract class Format implements Stringable
{
    /**
     * @var Stringable
     */
    private $stringable;

    /**
     * ValueObject constructor.
     * @param Stringable $stringable
     * @throws InvalidFormatException
     */
    public function __construct(Stringable $stringable)
    {
        if (!$this->valid((string)$stringable)) {
            throw new InvalidFormatException('Invalid format');
        }
        $this->stringable = $stringable;
    }

    /**
     * @param string $string
     * @return bool
     */
    abstract protected function valid(string $string): bool;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->stringable;
    }
}
