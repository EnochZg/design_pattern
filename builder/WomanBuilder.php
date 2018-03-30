<?php

namespace builder;

class WomanBuilder extends Builder
{
    function buildGender()
    {
        $this->person->setGender('woman');
    }

    function buildName($name)
    {
        $this->person->setName($name);
    }
}