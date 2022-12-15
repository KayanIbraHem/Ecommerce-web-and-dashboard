<?php
$id=$_GET['id'];
include 'functions/connect.php';
$selectPro="SELECT * FROM products WHERE id =$id";
$query=$conn->query($selectPro);
$product=$query->fetch_assoc();
?>
<form method="post" action="functions/product/update_product.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="<?=$product['name']?>" class="form-control" id="exampleInputEmail1" placeholder="Product Name" autofocus>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="price" value="<?=$product['price']?>" class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="text" name="sale" value="<?=$product['sale']?>" class="form-control" id="exampleInputEmail1" placeholder="Sale">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Picture</label>
    <input type="file" name="img" value="img" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="description" value="<?=$product['description']?>" class="form-control" id="exampleInputEmail1" placeholder="Description">
  </div>
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
      <?php
      $cid=$product['cat_id'];
      $catID="SELECT * FROM category";
      $catID=$conn->query($catID);
      foreach ($catID as $cat) {
      ?>
      <option value="<?=$cat['id']?>" <?=$cat['id']==$cid ?'selected':''?>><?=$cat['name']?></option>
      <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-success btn-icon-split">
   <span class="icon text-white-50">
      <i class="fas fa-check"></i>
   </span>
     <span class="text">UPDATE</span>
  </button>
</form>