<?php
//performing repetative actions tasks/actions
//for
//while
//do...while



//infinite

$counter=1;
while(1){
	echo "$counter====<br>";
	if($counter === 100) {
	break;
}

$counter++;
}
die;


//do...while

$i=0;
do{
	echo "$i<br>";
	$i++;

}
while($i <=10);

	die;


//while loop
$i=0;
while($i<10){
	echo "$i<br>";
	$i++;


}

	die;

//for loop
//for(initialization ; condition/expression ; increment/decrement)

for($i=0 ; $i<10 ; $i++)
{
	echo "Messi <br>";
}
die;

?>