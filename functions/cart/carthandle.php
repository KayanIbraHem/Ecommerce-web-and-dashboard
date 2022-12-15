<?php
session_start();
include_once"../../admin/functions/connect.php";

$productID=$_GET['cartvalue'];
$userID=$_SESSION['loginUserID'];

$insertProCart="INSERT INTO  cards (user_id,pro_id) VALUES ('$userID','$productID')";

$insertProCart=$conn->query($insertProCart);

