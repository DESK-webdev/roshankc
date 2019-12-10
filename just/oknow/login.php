<?php
$try=NULL;
$update="";
require "phps/include.php";
if(($user=$_GET['username']) && ($pass=$_GET['password'])){
  $try=login($user,$pass);
}
if($try==0){$update="This is just for testing";}
include "phps/header.php";
echo '
<body>
<div class="login_plate"><form class="login_form" action=""  method="GET"> 
 <fieldset>
 <legend><h2>Login Form</h2>
</legend>
  <div class="container">
    <input type="text" placeholder="Enter Username" name="u_name" required><br />
    <input type="password" placeholder="Enter Password" name="psw" required><br />
    <input type="checkbox"  name="remember"> <b>Remember me</b><br>
    <button type="submit">Login</button><br><br>
    <span class="forgot_psw"> <a href="#">Forgot password?</a></span>
  </div><br>
    <button type="button" class="sign_up"><a href="register.php">Sign_up</a></button>
</fieldset>
'.$update.'
</form></div></body>';
include "phps/footer.php";
?>