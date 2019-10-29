<?php
include "db.php";


//insert the data to admin table

if(isset( $_POST['submit']))
{
	echo "hai";
	include "image.php";
	
	$name = $_POST['postName'];
	$des = $_POST['description'];
	$date = date("d/m/y");
	
	
			$sanju = "INSERT INTO mba_posts(postName,description,image,date) values('$name', '$des', '$target_dir_db' ,'$date')";
			$code = mysqli_query($con, $sanju) or die (mysqli_error($con));
	
	if($code)
	{
		header('Location:post.php');
	}
	else
	{
		echo "Data Cannot Inserted";
	}
	
	
}