<?php

abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro() :string;
}

class Audi extends Car {
    public function intro() :string {
        return "I am Audi";
    }
}

class Volvo extends Car {
    public function intro() :string {
        return "i am Volvo";
    }
}