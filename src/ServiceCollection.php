<?php
declare(strict_types = 1);

namespace Relevo\Container;

class ServiceCollection
{
    /**
     * @var mixed[]
     */
    private $services;

    /**
     * Create new ServiceCollection.
     *
     * @param mixed[] $services
     */
    public function __construct(array $services = [])
    {
        $this->services = $services;
    }

    /**
     * Set container entry.
     *
     * @param string $name
     * @param mixed $value
     */
    public function set(string $name, $value)
    {
        $this->services[$name] = $value;
    }

    /**
     * Get all services as an array.
     *
     * @return string[]
     */
    public function toArray() : array
    {
        return $this->services;
    }
}
