<?php

class Fruit {
    //Properties
    private $name;
    public $color;

    //Methods

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() : string {
        return (string) $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return (string) $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
// $apple->name = "Hello";
$banana->set_name("Banana");

$apple->set_color("Red");
$banana->set_color("Yellow");

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

echo "<hr>";

echo $apple->color;
echo "<br>";
echo $banana->color;