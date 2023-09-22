<?php
require 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$nursery=$_POST['nursery'];
$address=$_POST['address'];
$password=$_POST['pass'];
$uploaddir = 'uploads/';

$uploadfile = $uploaddir . basename($_FILES['licence']['name']);
move_uploaded_file($_FILES['licence']['tmp_name'], $uploadfile);
 $image= basename($_FILES['licence']['name']);
 $sql="INSERT INTO `owner`( `name`, `email`, `phone`, `nursery_name`, `address`, `password`, `file`, `owner_status`) VALUES ('$name','$email','$phone','$nursery','$address','$password','$image',0)";
 $result=$con->query($sql);
 $count=$con->affected_rows;
 if($count>0){
 	header("location:owner_login.php?status=success");
 }
else{
	header("location:owner_registration.php?status=failed");
}
?>