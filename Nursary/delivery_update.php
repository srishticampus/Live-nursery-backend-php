<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="update billing set order_status=2,status_by=0 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:order.php?status=failed");
}
else{
	header("location:order.php?status=success");
}
?>