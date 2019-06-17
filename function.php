<?php

$num1 = 2;

$num2 = 5;

_add($num1, $num2);

function _add($num1, $num2 ,$num3 = ''){
	echo "Sum" . ($num1 + $num2 + $num3);

	
	die;
}


