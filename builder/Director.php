<?php

namespace builder;

class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function createPerson($name)
    {
        $this->builder->buildName($name);
        $this->builder->buildGender();
        return $this->builder->create();
    }
}