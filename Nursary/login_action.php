<?php
require 'connection.php';
session_start();
$your_email=$_POST['your_email'];
$your_pass=$_POST['your_pass'];
$sql="select * from  user where email='$your_email' and password='$your_pass'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['id']=$row['id'];
	header("location:index.php?status=success");
}
else{
	header("location:login.php?status=failed");
}

?>