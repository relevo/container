<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface RegistersContainerEntries
{
    /**
     * Add entries to the container.
     *
     * @param ContainerBuilder $container
     */
    public function registerContainerEntries(ContainerBuilder $container);
}
