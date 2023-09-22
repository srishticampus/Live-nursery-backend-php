<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from cart where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:cart.php?status=failed");
}
else{
header("location:cart.php?status=success");	
}

?>