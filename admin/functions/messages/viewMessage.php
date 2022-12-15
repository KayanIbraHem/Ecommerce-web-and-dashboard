<?php 
include_once'../connect.php';

$id=$_POST['messageid'];

$msgView="UPDATE messages SET view = 1 WHERE id =$id";
$msgQuery=$conn->query($msgView);

if($msgQuery){
	
	$unreadMsg="SELECT count(id) as total FROM messages WHERE view = 0";
	$unreadMsg=$conn->query($unreadMsg);
	$unreadMsg=$unreadMsg->fetch_assoc();
	echo($unreadMsg['total']);
}else{
	echo $conn->error;
}