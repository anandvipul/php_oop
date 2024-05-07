<?php


class Fruit {
    public $name;
    public $color;
    
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "The fruit is $this->name and its color is $this->color.";
    }
}

class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a Berry";
    }
}

$apple = new Fruit("Apple", "Red");
$strawberry = new Strawberry("Strawberry", "Red");
// $strawberry->message();
echo "<br>";
// $apple->intro();
echo "<br>";
// $strawberry->intro();

// Protected Access Modifier 

class Vehicle {
    public $tyres;
    public $color;
    
    public function __construct($tyres, $color) {
        $this->tyres = $tyres;
        $this->color = $color;
    }

    protected function generic_message() {
        echo "Tyres: $this->tyres  <br> Color: $this->color";
    }
}

class Bus extends Vehicle {
    public function message() {
        $this->generic_message();
    }
}

$bus = new Bus("4", "Red");
$bus->message();

// The final KeyWord

final class School {
    public $students;

    function __construct($students) {
        $this->students = $students;
    }
}

$anotherSchool = new School(34);
echo $anotherSchool->students;

class ModelSchool extends School {
    
}