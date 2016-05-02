<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface AddsContainerEntries
{
    /**
     * Add entries to container.
     *
     * @param Container $container
     */
    public function addContainerEntries(Container $container);
}
