<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'traning');

$conn=new mysqli(HOST,USER,PASS,DBNAME);

$conn->set_charset('utf8');



// if($conn){
// echo "Done";
// }else{
// 	echo $conn->error;
// }