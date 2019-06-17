<?php

echo "<pre>";
//Associative arrays

$student=[
	'name'=> "Ram Sharma",
	'age'=>30,
	'college'=>'Swastik',

	'somethung else goes here',

	'fatherName' =>'Abc',

	'bjdshcvzxhkjc ',


];


//replacing/modifying 
var_dump($student);
$student['college']="Acol";
var_dump($student);
die;

//accessing associative arrau

echo $student['age'];

die;


var_dump($student);
echo '<hr>';


$name= "Shyam";
if(isset($name)){
	echo $name;
}
else{
	echo 'No $variable exists';

}
die;


$fruits=[
	'Apple',
	'Pineapple',
	'Mango',
	'Orange',
	10002,
	3000,
	20,
	10.01,
];

//checks if an element exists in an array

if(isset($fruits[5])){
	echo "fruits[5]";
}
die;


//removing particular indexed element
unset($fruits[4]);
var_dump($fruits);
die;

//adding new element
$fruits[]='Something';

//Acceeeing array elements randomly
echo $fruits[2];
echo "<hr>";

echo"Total Elements:".count($fruits);

var_dump($fruits);
die;
?>
