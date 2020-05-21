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
    private $string;

    /**
     * ValueObject constructor.
     * @param Stringable $string
     * @throws InvalidFormatException
     */
    public function __construct(Stringable $string)
    {
        if (!$this->valid((string)$string)) {
            throw new InvalidFormatException('Invalid format');
        }
        $this->string = $string;
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
        return (string)$this->string;
    }
}
