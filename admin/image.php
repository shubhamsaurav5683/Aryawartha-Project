<?php

$target_dir = "img/";
$target_dir_db = "admin/img/";

$target_file1 = $target_dir . basename($_FILES["image"]["name"]);

$target_dir_db = $target_dir_db . basename($_FILES["image"]["name"]);
$uploadOk = 1;


	
	try{
		move_uploaded_file($_FILES["image"]["tmp_name"],$target_file1);
	}
	catch(Exception $e)
	{
		echo $target_file1;
	}		
	
	

?>