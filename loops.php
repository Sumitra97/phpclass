<?php  
//Associative array

$student=[
	'name'=> "Ram Sharma",
	'age'=>30,
	'college'=>'Swastik',

	'fatherName' =>'Abc',
];

echo '<h1> Associative Array using foreach()</h1>';
foreach ($student as $key => $value) {
	# code...
	echo ucfirst($key) . " : $value<br>";
}
die;


//Accessing arrays using loops
$fruits = [
	'Apple',
	'Pineapple',
	'Mango',
	'Orange',
];

echo '<h1>using foreach()</h1>';
foreach($fruits as $value){
	echo "($value)<br>";
}
die;

for($i=0 ; $i < count([$fruits]); $i++){
	echo $fruits[$i];
}
die;
?>

