<?php 


include("navbar.php");
include("owner-engine.php");

if(isset($_SESSION["email"])){
  header("location:owner-index.php");
}

?>


<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Login</h3><hr><br><br>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>

    <center><input type="submit" id="submit" name="owner_login" class="btn btn-primary btn-block" value="Submit"></center>
    
    <div class="form-group">
      <a href="forgot-password-owner.php">Forgot Password?</a> 
    </div>
    <div class="form-group">
      <a href="owner-register.php">Don't have an account? Register now</a> 
    </div>
  
  </form>
</div>