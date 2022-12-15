<?php 

$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$priv=$_POST['priv'];

include'../connect.php';


if(!empty($password)){
	$newPass=md5($password);
	$upadatePassword="UPDATE users SET password='$newPass' WHERE id=$id";
	$queryPassword=$conn->query($upadatePassword);
}	

$updateUser="UPDATE users SET 

	username='$username',
	phone='$phone',
	email='$email',
	address='$address',
	gender='$gender',
	priv='$priv'
	WHERE id=$id

";

if($conn->query($updateUser)){
	header("location: ../../users.php");
}else{
	echo $conn->error;
}