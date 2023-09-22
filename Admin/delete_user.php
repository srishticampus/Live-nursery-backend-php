<?php
require 'connection.php';
session_start();
$sql="delete from user where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:users.php?status=failed");
}
else{
	header("location:users.php?status=success");
}

?>