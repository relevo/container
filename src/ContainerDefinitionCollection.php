<?php
declare(strict_types = 1);

namespace Relevo\Container;

class ContainerDefinitionCollection
{
    /**
     * @var mixed[]
     */
    private $definitions;

    /**
     * Create new ContainerDefinitionCollection.
     *
     * @param mixed[] $definitions
     */
    public function __construct(array $definitions = [])
    {
        $this->definitions = $definitions;
    }

    /**
     * Add container definition.
     *
     * @param string $name
     * @param mixed $value
     */
    public function add(string $name, $value)
    {
        $this->definitions[$name] = $value;
    }

    /**
     * Get all definitions as an array.
     *
     * @return string[]
     */
    public function toArray() : array
    {
        return $this->definitions;
    }
}
