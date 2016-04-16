<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface ContainerEntries
{
    public function registerContainerEntries(ContainerBuilder $container);
}
