<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface Container
{
    /**
     * Get entry.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function get(string $name);

    /**
     * Add entry.
     *
     * @param string $name
     * @param mixed $value
     */
    public function set(string $name, $value);
}
