<?php 
	include 'config.php';


if (isset($_POST['news'])) {
	$title=$_POST['title'];
	$news=$_POST['postnews'];
	$cid=$_POST['id'];

	$sql=mysqli_query($con, "INSERT INTO messages VALUES(NULL, '$title', '$news', '$cid')") or die(mysqli_error($con));

	if($sql){
		header('location:admin.php?news=1');
	}
	else{
		header('location:admin.php?news=2');
	}
}

if (isset($_POST['add'])) {
	$course=$_POST['course'];


	$sql=mysqli_query($con, "INSERT INTO courses VALUES(NULL, '$courses')") or die(mysqli_error($con));

	if($sql){
		header('location:admin.php?news=1');
	}
	else{
		header('location:admin.php?news=2');
	}
}


 ?>