<?php
require 'connection.php';
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="select * from owner where email='$email' and password='$pass' and owner_status=1";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['owner']=$row['id'];
	header("location:index.php?status=success");

}
else{
	header("location:owner_login.php?status=failed");
}


?>