<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface ServiceProvider
{
    /**
     * Register services into the given container.
     *
     * @param Container $container
     */
    public function registerServices(Container $container);
}
