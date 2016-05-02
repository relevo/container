<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface ContainerBuilder
{
    /**
     * Register entry into the container.
     *
     * @param string $name
     * @param mixed $value
     */
    public function set(string $name, $value);
}
