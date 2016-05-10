<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface ServiceProvider
{
    /**
     * Add services to the given collection.
     *
     * @param ServiceCollection $services
     *
     * @return ServiceCollection
     */
    public function addServices(ServiceCollection $services) : ServiceCollection;
}
