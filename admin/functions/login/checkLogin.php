<?php
$username=$_POST['username'];
$password=md5($_POST['password']);

include '../connect.php';

$checkUser="SELECT	* FROM admins WHERE 	username='$username' AND password= '$password' ";
$query=$conn->query($checkUser);

$getSession=$query->fetch_assoc();
$id=$getSession['id'];
$uName=$getSession['fullname'];


if($query->num_rows>0){
	session_start();
	$_SESSION['login_id']=$id;
	$_SESSION['userName']=$uName;
header("location:../../index.php");

}else{

header("location:../../login.php");

}