<?php 
    session_start();
    include'../connect.php';

    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $priv=$_POST['priv'];

    $UsersFieldErrors=[];

    if(empty($username)){
        $UsersFieldErrors[]="User Name is Required";
    }
    if(empty($password)){
        $UsersFieldErrors[]="password is Required";
    }
    if(empty($phone)){
        $UsersFieldErrors[]="Phone is Required";
    }
    if(empty($email)){
        $UsersFieldErrors[]="Email is Required";
    }
    if(empty($address)){
        $UsersFieldErrors[]="Address is Required";
    }
    if(empty($UsersFieldErrors)){
       $insertUser="INSERT INTO users (username , password , phone , email , address, gender, priv)
                     VALUES ('$username','$password','$phone','$email','$address','$gender','$priv')";

       $query=$conn->query($insertUser);

       if($query){
            header("location: ../../users.php");
            }else{
            echo $conn->error;
        }
    }else{
         $_SESSION['usersFielderrors']=$UsersFieldErrors;
        header("location: ../../users.php?action=add");
    }    