<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface RegistersContainerEntries
{
    public function registerContainerEntries(ContainerBuilder $container);
}
