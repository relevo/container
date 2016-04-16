<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface ContainerBuilder
{
    public function set(string $name, $value);
}
