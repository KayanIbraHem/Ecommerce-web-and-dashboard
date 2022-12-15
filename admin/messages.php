<?php
session_start();
include'includes/header.php'; 
include'includes/sidebar.php'; 
include'includes/navbar.php';
include_once'functions/connect.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <?php
                if(!isset($_GET['action'])){
                echo('Messages');
                }
            ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>RECEIVE TIME</th>
                        <th>VIEW</th>
                        <th>CONTROLLES</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $selectMessage="SELECT * FROM messages";
                    $queryMessage=$conn->query($selectMessage);
                    $messageID=1;
                    foreach($queryMessage as $message){
                ?>
                    <tr>
                        <td><?=$messageID++?></td>  
                        <td><?=$message['name']?></td>  
                        <td><?=$message['phone']?></td> 
                        <td><?=$message['email']?></td> 
                        <td><?=$message['send_time']?></td>
                        <td><?=$message['view'] == 0 ?'UnRead':'Read'?></td>   
                        <td>
                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary msgBtn" data-toggle="modal" data-target="#id<?=$message['id']?>" data-id="<?=$message['id']?>">
                          ViewMessage
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$message['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Message content</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?=$message['message']?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" >Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        </td>   
                    </tr>   
                <?php }?>                                       
             </tbody>
        </table>  


        </div>
        
    </div>
</div>
<!-- /.container-fluid -->
        
<?php
include'includes/footer.php'; 
?>
<script src="js/adminjs.js"></script>