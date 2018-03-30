<?php

namespace builder;

abstract class Builder
{
    protected $person;

    public function __construct()
    {
        $this->person = new Person();
    }

    abstract function buildGender();

    abstract function buildName($name);

    public function create()
    {
        return $this->person;
    }
}