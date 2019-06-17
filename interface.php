<?php

interface College {
	public  function  getName();

	public function getAge();
}

class Common {
	protected $name;
	protected $age;

	public function getName() {

		return $this->name;


		public function getAge() {

			return $this->age;
		}
	}

	class Student extends Common() {
		public function __construct($name, $age) {
			$this->name = $name;
			$this->age = $age;
		}
	}


$student= new Student("Ram",22);
echo $student->getName;

}