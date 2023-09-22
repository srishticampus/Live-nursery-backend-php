<?php
require 'connection.php';
session_start();
$id=$_SESSION['owner'];
$category=$_POST['category-name'];
$quantity=$_POST['quantity'];
$sql="INSERT INTO `category`( `name`, `quantity`, `owner_id`) VALUES ('$category','$quantity','$id')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:category.php?status=success");
}
else{
header("location:category.php?status=failed");
}

?>