<?php
require 'connection.php';
session_start();
$cid=$_POST['cid'];
$userid=$_SESSION['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$postcode=$_POST['postcode'];
$pid=$_POST['pid'];
$count=0;
	$sql="";
	foreach ($cid as  $value) {
	
	$sql="INSERT INTO `billing`(`user_id`, `cart_id`, `city`, `state`, `country`, `pincode`, `name`, `email`, `phone`, `address`) VALUES ('$userid','$value','$city','$state','$country','$postcode','$name','$email','$phone','$address')";
	$result=$con->query($sql);
	$count=$con->affected_rows;
	


	if($count>0){
		foreach ($pid as  $value1) {
	$sql2="update billing set product_id=$value1 where id=$value";
	$result2=$con->query($sql2);
	$s="select * from cart where id=$value";
	$r=$con->query($s);
	$ro=$r->fetch_assoc();
	$quantity=$ro['quantity'];
	$sql3="update product set quantity=quantity-$quantity where id=$value1";
	$result3=$con->query($sql3);

	}
		$sql1="update cart set checkout_stats=1 where id=$value";
	$result1=$con->query($sql1);

	header("location:shop.php?status=success");
}
else{
	

	header("location:checkout.php?status=failed");
	//echo $sql;
}
}






?>