<?php
include_once'functions/connect.php';
$lastProId=$conn->query("SELECT COUNT(id) AS totalNum FROM products ");
$lastProId=$lastProId->fetch_assoc();

?>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				  New Product
				</button>
					<!-- Modal -->
			        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			          <div class="modal-dialog" role="document">
			            <div class="modal-content">
			              <div class="modal-header">
			                <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                  <span aria-hidden="true">&times;</span>
			                </button>
			              </div>
			              <div class="modal-body">
			                  <?php 
			               
			              if(isset($_SESSION['emptyFielderrors'])  || isset($_SESSION['imgErrormassage'])){ ?>
			                    <div style="display: inline-block; text-align: center; ">    
			                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
			                        <strong>Sorry!</strong> <?php
			                        foreach($_SESSION['emptyFielderrors'] as $emptyFielderrors){

			                         echo $emptyFielderrors;
			                         echo "<br>";
			                        }?>
			                        <?php
			                        foreach($_SESSION['imgErrormassage'] as $imgErrormassage){

			                         echo $imgErrormassage;
			                         echo "<br>";
			             }
			             ?>
			                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                        <span aria-hidden="true">&times;</span>
			                      </button>
			                    </div>
			                  </div> 
			                    <?php 
			                      unset($_SESSION['emptyFielderrors']);
			                      unset($_SESSION['imgErrormassage']);
			                    }
			                  ?>
			              <form class="addnewproduct">
			                <input type="hidden" name="lastNum" value="<?=$lastProId['totalNum']?>">
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Name</label>
			                  <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" placeholder="Product Name" autofocus >
			                </div>
			               <div class="form-group">
			                  <label for="exampleInputEmail1">Price</label>
			                  <input type="text" name="price" value="" class="form-control" id="exampleInputEmail1" placeholder="Price">
			                </div>
			                 <div class="form-group">
			                  <label for="exampleInputEmail1">Sale</label>
			                  <input type="text" name="sale" value="" class="form-control" id="exampleInputEmail1" placeholder="Sale">
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputEmail1">img</label>
			                  <input type="file" name="img[]" value="" class="form-control" id="exampleInputEmail1" multiple>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Description</label>
			                  <input type="text" name="description" value="" class="form-control" id="exampleInputEmail1" placeholder="Description">
			                </div>
			              <br>
			                <div class="form-group">
			                  <label for="exampleFormControlSelect1">Category</label>
			                  <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
			                    <?php
			                    $catID="SELECT * FROM category";
			                    $catID=$conn->query($catID);
			                    foreach($catID as $cat){
			                    ?>
			                    <option value="<?=$cat['id'];?>" ><?=$cat['name'];?></option>
			                  <?php } ?>
			                  </select>
			                </div>
			                <button type="submit" class="btn btn-primary">Submit</button>
			                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			              </form>
			              </div>
			              <div class="modal-footer">
			                
			              </div>
			            </div>
			          </div>
			        </div>
				<div class="res"></div>
				<div class="form-group">
					
						<h1 class="h3 mb-4 text-gray-500 proNumbers">
							
						</h1>
					
				</div>
				<table class="table table-striped table-hover">
					<?php 
					// if(isset($_SESSION['done'])){
					 ?>
						<!-- <div style="display: inline-block; text-align: center;">	 	
							 <div class="alert alert-success alert-dismissible fade show" role="alert">
							 	<strong>Well done!</strong>$_SESSION['done'] 
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
						</div>	 -->
				<?php	
					 // unset($_SESSION['done']);
					// }
				?>
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>PRICE</th>
							<th>SALE</th>
							<th>IMG</th>
							<th>DESCRIPTION</th>
							<th>CATEGORY</th>
							<th>CONTROLLES</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include_once"functions/connect.php";
							$selectProduct="SELECT * FROM products ORDER BY id DESC";
							$selectProduct=$conn->query($selectProduct);
							if(!$selectProduct) die($conn->error);
							$proId=1;
							foreach ($selectProduct as $product) {
						?>
						<tr>
							<td><?=$proId++;?></td>
							<td id="product_name"><?=$product['name'];?></td>
							<td id="product_price"><?=$product['price'];?></td>
							<td id="product_sale"><?=$product['sale'];?></td>
							<td>
								<?php
								$proid=$product['id'];
								$selectIMG="SELECT img_name FROM images WHERE pro_id =$proid ";
								$selectIMG=$conn->query($selectIMG);
								$selectIMG=$selectIMG->fetch_assoc();
								$imgExlode=explode(',', $selectIMG['img_name'])
								?>
						
								<img style="width:50px;" src="images/pro/<?=$imgExlode[0];?>">
							
							</td>
							<td id="product_description"><?=$product['description'];?></td>
							<td><?php
							$id=$product['cat_id'];
							$selectCat="SELECT name FROM category WHERE id=$id";
							$selectCat=$conn->query($selectCat);
							$selectCat=$selectCat->fetch_assoc();
							echo $selectCat['name'];
							?></td>
							<td>
							<!-- Start Edit Button -->
								<a class="btn btn-primary" href="?action=edit&id=<?=$product['id']?>">
									<span class="icon text-white-50">
										<i class="fas fa-edit"></i>
									</span>
                                        <span class="text">Edit</span>
                                </a>
                                <!-- End Edit Button -->
										
								<!-- Start Delete Button -->
								<button type="button" class="btn btn-danger deleteBtn" data-toggle="modal" data-target="#deleteModal"
								 data-id="<?=$product['id']?>" data-name="<?=$product['name']?>">
			                        <span class="icon text-white-50">
			                           	<i class="fas fa-trash"></i>
			                        </span>
						             <span class="text">Delete</span>
								</button>
								<!-- End Delete Button -->
							</td>
						</tr>
					<?php } ?>				
				 </tbody>
				</table>
						<!-- Start Modal Delete -->
						<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								    <div class="modal-header">
								      <h5 class="modal-title" id="exampleModalLabel">Warring</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								    </div>
								      <div class="modal-body">
								      
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <a class="btn btn-danger" id="deletePro" href=""><span class="icon text-white-50">
			                           	<i class="fas fa-trash"></i>
			                       	  </span>
						             <span class="text">Delete</span></a>
								      </div>
							    </div>
							</div>
						</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script>
	$('.deleteBtn').click(function(){
		var proID=$(this).data('id')
		var proName=$(this).data('name')
		$('#deletePro').attr("href","functions/product/delete_product.php?id="+proID)
		$('.modal-body').html("are you sure you want to delete product :"+proName)
	})
</script>
