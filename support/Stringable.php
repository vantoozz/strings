<?php declare(strict_types=1);

if (!interface_exists(Stringable::class)) {
    /**
     * Interface Stringable
     */
    interface Stringable
    {
        /**
         * @return string
         */
        public function __toString(): string;
    }
}
