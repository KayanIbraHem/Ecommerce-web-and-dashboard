<?php 
include'../../admin/functions/connect.php';

$name=$_POST['Name'];
$phone=$_POST['Phone'];
$email=$_POST['Email'];
$message=$_POST['Message'];

$insertMessage="INSERT INTO messages (name,phone,email,message) VALUES('$name','$phone','$email','$message') "; 
 if($conn->query($insertMessage)){
 		echo "<div class='alert alert-success'>Message sent successfully</div>";
 }else{
 	echo $conn->error;
 }