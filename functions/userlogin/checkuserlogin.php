<?php

$username=$_POST['username'];
$password=md5($_POST['password']);

include '../../admin/functions/connect.php';

$checkUser="SELECT	* FROM users WHERE 	username='$username' AND password= '$password' ";
$query=$conn->query($checkUser);

$getUserID=$query->fetch_assoc();
$userID=$getUserID['id'];

if($query->num_rows>0){
	session_start();
	$_SESSION['loginUserID']=$userID;
header("location:../../index.php");

}else{

header("location:../../userlogin.php");

}