<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface Container
{
    /**
     * Add entry.
     *
     * @param string $name
     * @param mixed $value
     */
    public function register(string $name, $value);
}
