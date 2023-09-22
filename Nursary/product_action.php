<?php
require 'connection.php';
session_start();
$name=$_POST['name'];
$category=$_POST['category'];
$quantity=$_POST['quantity'];
$description=$_POST['description'];
$additional_info=$_POST['additional_info'];
$owner=$_SESSION['owner'];
$price=$_POST['price'];
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
 $image= basename($_FILES['image']['name']);
 $sql="INSERT INTO `product`(`name`, `category_id`, `file`, `quantity`, `description`, `additional_information`, `owner_id`,`price`) VALUES ('$name','$category','$image','$quantity','$description','$additional_info','$owner','$price')";
 $result=$con->query($sql);
 $count=$con->affected_rows;
 if($count>0){
 	header("location:product.php?status=success");
 }
 else{
 header("location:product.php?status=failed");	
 }

?>