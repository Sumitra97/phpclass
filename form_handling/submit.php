<?php
echo "<pre>";
print_r($_FILES);

$isUploaded=is_uploaded_file($_FILES['photo']['tmp_name']);


$photoAllowedTypes =['image/jpeg', 'image/jpg' , 'image/png' ,'image/gif']
;

if($isUploaded === true){
	$filename= $_FILES['photo']['name'];
	$type = $_FILES['photo']['type'];

	if(in_array($type, $photoAllowedTypes)){

	move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/' .$filename)
		;

		echo"File was uploaded";
	}
	else{
		echo "Invalid photo type";
	}
}
else{
	echo "No photo was uploaded.";
	
}
