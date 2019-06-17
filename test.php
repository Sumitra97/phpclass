<?php


$directory="logs";
$logname='php.logs';

if(file_exists($directory)){
	echo"Directory exists";


}
else{
	mkdir($directory);
	echo"File doesnot exist";
}
die;
?>

