<?php
session_start();
include'../connect.php';

    $name=$_POST['name'];
    $price=$_POST['price'];
    $sale=$_POST['sale'];
    $description=$_POST['description'];
    $cat_id=$_POST['cat_id'];

    $imgName=$_FILES['img']['name'];
    $tmpName=$_FILES['img']['tmp_name'];    
    $imgSize=$_FILES['img']['size'];
    $imgError=$_FILES['img']['error'];
    $imgExtensions=['jpg','png','jpeg','gif'];

    $imgSelect=[];
    $imgErrormassage=[];
    $emptyFielderrors=[];

    foreach ($_FILES['img']['name'] as $imgKey => $imgValue) {
        if($imgError[$imgKey] == 4){//check if img is valid.
           $imgErrormassage[]="Product Image Must Uploaded";
            }else{
                $getExtensions[$imgKey]=pathinfo($imgName[$imgKey],PATHINFO_EXTENSION);
                if($imgSize[$imgKey]>2000000){//check img size.
                   $imgErrormassage[]="Product Image Size is Too Big";
                }      //check if imgExtensions is valid.
                if(!in_array($getExtensions[$imgKey], $imgExtensions) ){ 
                   $imgErrormassage[]="Product Image Extensions is Not Allowed";
                }else{
                $imgNewname[$imgKey]=uniqid().".".$getExtensions[$imgKey];
                move_uploaded_file($tmpName[$imgKey], "../../images/pro/$imgNewname[$imgKey]");
                $imgSelect[]=$imgNewname[$imgKey];
                $imgImplode=implode(',', $imgSelect);
                }//End inarray else.
            } //End imgerror else.
         }//End file foreach.

      //check if field not valid
    if(empty($name)){
        $emptyFielderrors[]="Product Name is Required";
    }
    if(empty($price)){
        $emptyFielderrors[]="Product Price is Required";
    }
    if(empty($sale)){
        $emptyFielderrors[]="Product Sale is Required";
    }
    if(empty($description)){
        $emptyFielderrors[]="Product Description is Required";
    }
     // upload if there's no errors.
    if(empty($emptyFielderrors)&& empty($imgErrormassage)){
        $insertProduct="INSERT INTO
            products
                  (name,price,sale,description,cat_id)
            VALUES
                  ('$name','$price','$sale','$description','$cat_id')";
        $insertProductquery=$conn->query($insertProduct); 
                    
        if(isset($insertProductquery)){
            $getLastproductId="SELECT MAX(id) FROM products";
            $lastProduct=$conn->query($getLastproductId);
            $lastProductId=$lastProduct->fetch_assoc();
            $lastId=$lastProductId['MAX(id)'];
            $insertImage="INSERT INTO
             images
                   (img_name , pro_id)
             VALUES
                   ('$imgImplode','$lastId')";
            $imagesQuery=$conn->query($insertImage);  
            
        if(isset($imagesQuery)){
            $lastId=$conn->insert_id;
            $productNums=$conn->query("SELECT * FROM products");
            // $productNums=$productNums->num_rows;
            foreach($productNums as $productINFO){
                $sendINFO["name"] = $productINFO["name"];
                $sendINFO["price"]=$productINFO["price"];
                $sendINFO["sale"]=$productINFO["sale"];
                $sendINFO["description"]=$productINFO["description"];
            }
            echo json_encode($sendINFO);
            // echo "<div id='$lastId'  class='alert alert-success'>Product added successfully</div>";
            }else{
                echo $conn->error;
            }
        }else{
            echo $conn->error;
        }
    }else{ //Show if there's error.
    echo $conn->error;
      $_SESSION['emptyFielderrors']=$emptyFielderrors;
      $_SESSION['imgErrormassage']=$imgErrormassage;
      // header("location: ../../products.php?action=add");  
    }

   // data-num='$productNums'