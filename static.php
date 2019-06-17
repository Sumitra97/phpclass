<?php
class Student {
	const _AGE_LIMIT = 18;
	private static $age = 20;
	public static function printHello() {
	echo "The age limit is : " . self :: _AGE_LIMIT;
	echo "<hr>";
	echo " The Age Given is  :" .selg :: $age;

	self::Another;

}

public static function Another() {
	echo "another";

}

public static function checkAgeValidation($age) {
	if($age<self :: _AGE_LIMIT){
		echo "Not eligible";
	}
}
}