<?php

namespace App\Classes;

class Student {
    private String $name;

    public function __construct(String $name) {
        $this->name = $name;
    }

    public function getName() {
        echo __FILE__;
        return $this->name;
    }
}
