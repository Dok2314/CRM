<?php

namespace Engine\DI;

class DI
{
    /**
     * @var array
     */
    private array $container = [];

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function set($key, $value): DI
    {
        $this->container[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        return $this->has($key);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function has($key)
    {
        return $this->container[$key] ?? null;
    }
}