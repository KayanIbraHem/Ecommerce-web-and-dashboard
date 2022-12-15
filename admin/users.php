<?php
session_start();
include'includes/header.php'; 
include'includes/sidebar.php'; 
include'includes/navbar.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            <?php
                                if(!isset($_GET['action'])){
                                echo('USERS');
                                    }elseif($_GET['action'] == 'add'){
                                       echo('Add USERS');
                                        }elseif($_GET['action'] == 'edit'){
                                             echo('Edit USERS');            
                                }
                            ?></h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                           <?php
                            if(!isset($_GET['action'])){

                              include_once'desing/user/usersTable.php';

                            }else if($_GET['action'] =='add'){

                              include_once'desing/user/addUser.php'; 

                            }else if($_GET['action'] =='edit'){

                              include_once'desing/user/editUser.php'; 

                            }else{

                                 include_once'404.php';
                            }

                           ?>
                           
                        </div>
                        
                    </div>
                </div>
             <!-- /.container-fluid -->
        
<?php
include'includes/footer.php'; 
?>