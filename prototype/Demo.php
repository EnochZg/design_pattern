<?php

namespace prototype;

class Demo implements IPrototype
{
    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function copy()
    {
        return clone $this;
    }
}