<?php

namespace builder;

class Person
{
    private $name;
    private $gender;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function talk()
    {
        echo sprintf("My name is %s, I'm a %s \n", $this->name, $this->gender);
    }
}