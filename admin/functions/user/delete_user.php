<?php 
$id=$_GET['id'];

include'../connect.php';

$deleteUser="DELETE	FROM users WHERE id=$id";

if($conn->query($deleteUser)){
	header ("location: ../../users.php");
}else{
	echo $conn->error;
}