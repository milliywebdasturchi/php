<?php

class NewClass {
    public $name = "Abbosbek";
    private $age = 28;    
}

class MyClass extends NewClass {
    public function owner() {
        $a = $this->name;
        return $a;
    }
}