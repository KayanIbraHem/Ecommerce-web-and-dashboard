<?php 
$id=$_GET['id'];
include'../connect.php';

$deleteProduct="DELETE FROM products WHERE id=$id";
if($conn->query($deleteProduct)){
	header ("location: ../../products.php");
}else{
	echo $conn->error;
}