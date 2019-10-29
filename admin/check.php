<?php
include "db.php";
if (isset($_POST['login']));
{
	$email = $_POST['userName'];
	$password = $_POST['password'];
	
	$sql= "SELECT * FROM mba_login WHERE userName = 'Admin@123' And password = 'Admin123' ";
	$result = mysqli_query($con, $sql);
	$check = mysqli_fetch_array($result);
	if($check)
	{	
		header('Location:post.php');
	
	}else{
		echo "Ivalid Email Or Password";
	}
}

