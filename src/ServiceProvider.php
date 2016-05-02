<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface ServiceProvider
{
    /**
     * Add entries to the given container.
     *
     * @param Container $container
     */
    public function addContainerEntries(Container $container);
}
