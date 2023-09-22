<?php
require 'connection.php';
session_start();
$id=$_SESSION['owner'];
$category_id=$_POST['id'];
$category=$_POST['category-name'];
$quantity=$_POST['quantity'];
$sql="UPDATE `category` SET `name`='$category',`quantity`='$quantity' WHERE owner_id=$id and id=$category_id";
$result=$con->query($sql);
if(!$result)
{
	header("location:category.php?status=failed");
}
else{
	header("location:category.php?status=success");
}
?>