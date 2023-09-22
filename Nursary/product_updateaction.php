<?php
require 'connection.php';
session_start();
$name=$_POST['name'];
$category=$_POST['category'];
$id=$_POST['id'];
$quantity=$_POST['quantity'];
$description=$_POST['description'];
$additional_info=$_POST['additional_info'];
$price=$_POST['price'];
$owner=$_SESSION['owner'];
if($_FILES['image']['name']==""){
	$sq="select * from product where id=$id";
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
 $sql="UPDATE `product` SET `name`='$name',`category_id`='$category',`file`='$image',`quantity`='$quantity',`description`='$description',`additional_information`='$additional_info',`owner_id`='$owner',`price`='$price' WHERE id=$id";
 $result=$con->query($sql);

 if(!$result){
 
 	 header("location:product.php?status=failed");
 }
 else{
 		header("location:product.php?status=success");
	
 }

?>