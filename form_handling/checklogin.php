<?php


$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""

<die>

$username= $_POST['username'];
$password= $_POST['password'];

if($username === 'ram' && $password === 'sharma'){
	echo "Login Success";
}
else{
	echo "Invalid Login Credentials!";
}