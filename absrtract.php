<?php
abstract class Common {
	protected $name;
	protected $age;
}

class Student extends Common {
	protected $rollno=10;

	public function __construct($name, $age) {
		$this->name= $name;
		$this->age=$age;
	}

	public function doSomething() {
		echo "Hello! I am an abstract";
	}
}


$student= new Student("Ram",22);
echo $student->getName;
echo'<hr>';
$student->doSomething;

?>