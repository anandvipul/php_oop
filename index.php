<?php

class greetings {
    public static function welcome() {
        echo "hello";
    }

    public function __construct() {
        self::welcome();
    }
}

greetings::welcome();

class ClassA {
    public static function messageA() {
        return "Hello From Class A";
    } 
}

class ClassB {

    
    public function __destruct() {
        echo ClassA::messageA();
    }
}

$classB = new ClassB();
