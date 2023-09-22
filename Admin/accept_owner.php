<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="update owner set owner_status=1 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:Owner.php?status=failed");
}
else{
	header("location:Owner.php?status=success");
}

?>