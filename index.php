<?php

class Student {
	public function __construct($first_name, $last_name) {

		$this->first_name = $first_name;
		$this->last_name = $last_name;		
	}

	public function say() {
		echo "Hello, " . $this->first_name . " " . $this->last_name; 
	}
}

class MathStudent extends Student {
	public function sum($a, $b) {
		$sum = $a + $b;
		echo "Hi, " . $first_name . "! You " . $a . "+" . $b . "=" . $sum;
	}
}

$me = new Student("John","Doe");
$me->say();
echo "<br>";
$you = new MathStudent("Fazliddin","Eshqobilov");
$you->say();
$you->sum(16, 23);