<a class="btn btn-primary" href="?action=add">
	<span>
		<i class="fas fa-plus"></i>
	</span>
     <span class="text">Add New User</span>
 </a>
                                <br>
                                <br>
<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>USERNAME</th>
							<th>Phone</th>
							<th>EMAIL</th>
							<th>ADDRESS</th>
							<th>GENEDER</th>
							<th>PRIVILEGES</th>
							<th>CONTROLE</th>
						</tr>
					</thead>
					<tbody>
							<?php
							    include_once 'functions/connect.php';
							    $selectUsers = "SELECT * FROM users";
								$query = $conn -> query($selectUsers);
					            $id=1;
								foreach ($query as $user) {
							?>
						<tr>
							<td><?=$id++ ?></td>
							<td><?=$user['username'] ?></td>
							<td><?=$user['phone'] ?></td>
							<td><?=$user['email'] ?></td>
							<td><?=$user['address'] ?></td>
							<td><?=$user['gender'] == 0 ?  'Male' : 'Female';?></td>
							<td><?=$user['priv'] == 0 ? 'Admin' : 'User' ?></td>
							<td>
								<!-- Start Edit Button -->
								<a class="btn btn-primary" href="?action=edit&id=<?=$user['id']?>">
									<span class="icon text-white-50">
										<i class="fas fa-edit"></i>
									</span>
                                        <span class="text">Edit</span>
                                </a>
                                <!-- End Edit Button -->
										
								<!-- Start Delete Button -->
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#id<?= $user['id'] ?>">
			                        <span class="icon text-white-50">
			                           	<i class="fas fa-trash"></i>
			                        </span>
						             <span class="text">Delete</span>
								</button>
								<!-- End Delete Button -->

								<!-- Start Modal Delete -->
							<div class="modal fade" id="id<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								    <div class="modal-header">
								      <h5 class="modal-title" id="exampleModalLabel">Warring</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								    </div>
								      <div class="modal-body">
								        are you sure you want to delete user : <?= $user['username'] ?>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <a class="btn btn-danger " href="functions/user/delete_user.php?id=<?= $user['id'] ?>"><span class="icon text-white-50">
			                           	<i class="fas fa-trash"></i>
			                        </span>
						             <span class="text">Delete</span></a>
								      </div>
								    </div>
								</div>
							</div>
							</td>
						</tr>
        				<?php } ?>
					</tbody>
</table>

                
                
