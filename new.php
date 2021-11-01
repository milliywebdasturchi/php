<?php

class Person {
	public $first = "John";
	public $last = "Doe";
	public $age = "28";
}

class Pet extends Person {
	public function owner() {
		$a = $this->first;
		return $a;
	}
}


$pet01 = new Person();
echo "Hello, " . $pet01->first . " " . $pet01->last . ". You " . $pet01->age . " years old.";
