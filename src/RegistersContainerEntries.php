<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface RegistersContainerEntries
{
    /**
     * Register entries into the container.
     *
     * @param ContainerBuilder $container
     */
    public function registerContainerEntries(ContainerBuilder $container);
}
