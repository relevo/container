<?php
declare(strict_types = 1);

namespace Relevo\Container;

interface ServiceProvider
{
    /**
     * Get container definitions.
     *
     * @param ContainerDefinitionCollection $definitions
     *
     * @return ContainerDefinitionCollection
     */
    public function getContainerDefinitions(ContainerDefinitionCollection $definitions) : ContainerDefinitionCollection;
}
