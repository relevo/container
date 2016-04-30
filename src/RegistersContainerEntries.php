<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface RegistersContainerEntries
{
    /**
     * Register container entries.
     *
     * @param ContainerBuilder $container
     */
    public function registerContainerEntries(ContainerBuilder $container);
}
