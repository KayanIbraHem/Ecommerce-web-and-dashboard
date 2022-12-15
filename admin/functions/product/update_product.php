<?php
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$description=$_POST['description'];
$cat_id=$_POST['cat_id'];

$imgName=$_FILES['img']['name'];	
$tmpName=$_FILES['img']['tmp_name'];	
$imgSize=$_FILES['img']['size'];
$imgError=$_FILES['img']['error'];

include'../connect.php';


if($imgError==4){

	$selectImg="SELECT img FROM products WHERE id=$id";
	$imgQuery=$conn->query($selectImg);
	$imgQuery=$imgQuery->fetch_assoc();
	$imgName=$imgQuery['img'];
}

if($_FILES['img']['error']== 0){
 	$imgExtensions=['jpg','png','jpeg','gif'];
 	$checkExtensions=pathinfo($imgName,PATHINFO_EXTENSION);
 	if(in_array($checkExtensions, $imgExtensions)){
 		if($imgSize<2000000){
 			$imgName=uniqid().".".$checkExtensions;
 			move_uploaded_file($tmpName, "../../images/pro/$imgName");
 		}else{
 			die("File Size Too Big");
 		}
 	}else{
 			die("Image Extension Error");
 	}
}
 
$updateProduct="UPDATE products SET 

		name='$name',
		price='$price',
		sale='$sale',
		img='$imgName',
		description='$description',
		cat_id='$cat_id'
		WHERE id =$id

 ";

if($conn->query($updateProduct)){
	header("location: ../../products.php");
}else{
	echo $conn->error;
}