<?php
//if conditions
//syntax

$age=15;
if($age>18) {
	echo"Eligible";
}
else{
	echo"Not eligible";
}



$age=20;
$status=null;

//nested loop
if($age<1)
{
	echo "Age is not valid";
	die;

}


if($age<=11){
	$status="child";
}
	else if($age<=19){
		$status="teenager";
	}
		else if($age<=40){
			$status='Adult';
		}
			else{
				$status='old';
			}
		echo $status;
		die;
?>