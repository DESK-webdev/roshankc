<?php
$try=NULL;
$update="";
require "phps/include.php";
if(($user=$_GET['username']) && ($pass=$_GET['password'])){
  $try=login($user,$pass);
}
if($try==0){$update="something is wrong..may be password..";}
include "phps/header.php";
echo '
<form action=""  method="GET"> 
 <fieldset>
 <legend><h2>Login Form</h2>
</legend>
  <div class="container">
    <label for="u_name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br />
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br />
    <input type="checkbox"  name="remember"> <b>Remember me</b><br>
    <button type="submit">Login</button><br>
    <span class="forgot_psw"> <a href="#">Forgot password?</a></span>
  </div><br>
    <button type="button" class="sign_up">Sign_up</button>
</fieldset>
'.$update.'
</form>';
include "phps/footer.php";
?>