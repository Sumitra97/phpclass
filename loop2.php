<?php  
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

for($i=0 ; $i < count[$fruits); $i++){
	echo $fruits[$i];
}
die;
?>

