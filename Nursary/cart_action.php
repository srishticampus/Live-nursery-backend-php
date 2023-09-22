<?php
require 'connection.php';
session_start();
$product_id=$_POST['pid'];
$quantity=$_POST['quantity'];
$uid=$_SESSION['id'];
$sql="INSERT INTO `cart`( `product_id`, `quantity`,`userid`) VALUES ('$product_id','$quantity','$uid')";
$result=$con->query($sql);
$count=$result->affected_rows;
if($count>0){
	header("location:cart.php?status=success");
}
else{
	header("location:cart.php?status=failed");
}
?>