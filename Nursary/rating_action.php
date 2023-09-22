<?php
require 'connection.php';
session_start();
$uid=$_SESSION['id'];
$pid=$_POST['pid'];
$rating=$_POST['rating'];
$name=$_POST['name'];
$options=$_POST['options'];
$comments=$_POST['comments'];
$sql="INSERT INTO `review`(`count`, `reason`, `comments`, `product_id`,`user_id`) VALUES ('$rating','$options','$comments','$pid','$uid')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:shop.php?status=success");
}
else{
	header("location:shop.php?status=failed");
}

?>