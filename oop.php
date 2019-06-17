<?php
class Student {
	public $name;
	public $age;

	public function __consruct($name,$age){
		$this->name = $name;
		$this->age = $age;

	}

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}
}

$ram = new Student("Ram",22);
echo"Name: " . $ram->getName() . ", Age: " . $ram->getAge(
);
echo '<hr>';


$shyam = new Student("Ram",22);
echo"Name: " . $shyam->getName() . ", Age: " . $shyam->getAge(
);
echo '<hr>';







	