<?php

namespace builder;

class ManBuilder extends Builder
{
    function buildGender()
    {
        $this->person->setGender('man');
    }

    function buildName($name)
    {
        $this->person->setName($name);
    }
}