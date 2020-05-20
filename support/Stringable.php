<?php declare(strict_types=1);

if (!interface_exists(Stringable::class)) {
    interface Stringable
    {
        public function __toString(): string;
    }
}
