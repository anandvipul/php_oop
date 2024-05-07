<?php

class Fruit {
    public $name;
    public $color;
    public $weight;

    function set_name($name) {
        $this->name = $name;
    }

    protected function set_color($color) {
        $this->color = $color;
    }

    private function set_weight($weight) {
        $this->weight = $weight;
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");
$apple->set_weight("5.8");