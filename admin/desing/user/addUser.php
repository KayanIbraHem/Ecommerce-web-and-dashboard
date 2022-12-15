<?php 
if(isset($_SESSION['usersFielderrors'])){?>
      <div style="display: inline-block; text-align: center; ">    
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Sorry!</strong> <?php 
         
          foreach( $_SESSION['usersFielderrors'] as $usersErrors){
              echo $usersErrors;
              echo"<br>";
          }
          ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div> 
     
   <?php 
    unset($_SESSION['usersFielderrors']);
}
 ?>
 <form method="post" action="functions/user/add_user.php">
  
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1" placeholder="User Name">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Password">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" placeholder="Address">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" checked>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

<br>
<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0" >Admin</option>
      <option value="1" >User</option>
    </select>
  </div>

  <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
