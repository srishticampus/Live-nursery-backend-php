<?php
require 'connection.php';
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$pass=$_POST['pass'];
$re_pass=$_POST['re_pass'];
if($pass!=$re_pass){
	header("location:registration.php?status=error");
}
else{
	$sql="INSERT INTO `user`(`name`, `email`, `phone`, `address`, `password`) VALUES ('$name','$email','$phone','$address','$pass')";
	$result=$con->query($sql);
	$count=$con->affected_rows;
	$last_id = $con->insert_id;
	if($count>0){
		$_SESSION['id']=$last_id;
		header("location:index.php?status=success");
	}
	else{
	
		header("location:registration.php?status=failed");
	}
}
?>