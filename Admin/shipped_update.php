<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="update billing set order_status=1,status_by=1 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:order_details.php?status=failed");
}
else{
	header("location:order_details.php?status=success");
}
?>