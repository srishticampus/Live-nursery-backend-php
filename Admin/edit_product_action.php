<?php
require 'connection.php';
session_start();
$pname=$_POST['pname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$description=$_POST['description'];
$additional_information=$_POST['additional_information'];
$pid=$_POST['id'];

if($_FILES['image']['name']==""){
	$sq="select * from product where id=$pid";
	$res=$con->query($sq);
	$ro=$res->fetch_assoc();
	$image=$ro['file'];
}
else{
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
 $image= basename($_FILES['image']['name']);
}

 $sql="UPDATE `product` SET `name`='$pname',`file`='$image',`quantity`='$quantity',`description`='$description',`additional_information`='$additional_information',`price`='$price' WHERE id=$pid";
 $result=$con->query($sql);

 if(!$result){
 
 	 header("location:product.php?status=failed");
 }
 else{
 		header("location:product.php?status=success");
	
 }
?>