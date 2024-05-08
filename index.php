<?php

class greetings {
    public static function welcome() {
        echo "hello";
    }
}

class Greetingsnew extends greetings {
    public function __construct() {
        parent::welcome();
    }
}

greetings::welcome();
$newGreetings = new Greetingsnew();