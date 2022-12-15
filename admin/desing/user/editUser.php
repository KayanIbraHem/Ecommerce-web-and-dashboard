<?php
$id=$_GET['id'];
include 'functions/connect.php';
$select="SELECT * FROM users WHERE id=$id";
$query=$conn->query($select);
$user=$query->fetch_assoc();
?>
<form method="post" action="functions/user/editeuser.php">
  <div class="form-group">
    <input type="hidden" name="id" value="<?=$user['id']?>">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" value="<?=$user['username']?>" class="form-control" id="exampleInputEmail1" >
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" placeholder="Edit Password" class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="<?=$user['phone']?>" class="form-control" id="exampleInputEmail1" >
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="<?=$user['email']?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" value="<?=$user['address']?>" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" <?=$user['gender']== 0 ?'checked':''?>>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" <?=$user['gender']== 1 ?'checked':''?>>
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

<br>
<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0" <?=$user['priv']== 0 ?'selected':''?>>Admin</option>
      <option value="1" <?=$user['priv']== 1 ?'selected':''?>>User</option>
    </select>
  </div>

  <br>

  <button type="submit" class="btn btn-success btn-icon-split">
   <span class="icon text-white-50">
      <i class="fas fa-check"></i>
   </span>
     <span class="text">UPDATE</span>
  </button>
</form>