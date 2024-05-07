<?php

class GoodBye {
    const LEAVING_MESSAGE = "Thank You for Visiting";
    public function message() {
        echo self::LEAVING_MESSAGE;
    }
}

echo GoodBye::LEAVING_MESSAGE;

$goodbye = new GoodBye();
$goodbye->message();