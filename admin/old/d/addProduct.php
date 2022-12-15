<?php 
if(isset($_SESSION['emptyFielderrors'])|| isset($_SESSION['imgErrormassage'])){ ?>
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
          }?>
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
<form method="post" action="functions/product/add_product.php" enctype="multipart/form-data">
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
      include'functions/connect.php';
      $catID="SELECT * FROM category";
      $catID=$conn->query($catID);
      foreach($catID as $cat){
      ?>
      <option value="<?=$cat['id'];?>" ><?=$cat['name'];?></option>
    <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
