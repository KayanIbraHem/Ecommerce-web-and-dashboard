<?php
session_start();
include'includes/header.php'; 
include'includes/sidebar.php'; 
include'includes/navbar.php';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php
                                if(!isset($_GET['action'])){
                                echo('Products');
                                    
                                        }elseif($_GET['action'] == 'edit'){
                                             echo('Edit Product');            
                                }
                            ?>
                        </h1>

                    <div class="row">
                        <div class="col-lg-12">
                            <?php

                            if(!isset($_GET['action'])){

                            include'desing/product/productsTabel.php';

                                // }elseif($_GET['action'] == 'add'){

                                //   include'desing/product/addProduct.php';

                                    }elseif($_GET['action'] == 'edit'){

                                        include'desing/product/editProduct.php';

                                            }else{
                                echo'Sorry Page Not Found';
                            }
                            ?>
                        </div>
                     </div>
                </div>
                <!-- /.container-fluid -->
<?php
include'includes/footer.php'; 
?>
<script src="js/adminjs.js"></script>
