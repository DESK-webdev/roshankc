<?php
    echo '<div class="register_form">
    <h1>Parent client</h1>
    <form method="GET" action="?site=data_store">
    <label for="name">Hotel name: <br>
        <input type="name" name="hotel_name" id="#" placeholder="Hotel_name" required>
      </label><br>
      <label for="contact_number">Phone.No: <br>
        <input type="number" name ="phone" placeholder="phonenumber">
    </label><br>
     <label for="New Psw"> Password: <br><input type="password" name="password" placeholder="enter a new password" required><br></label>
     <label for="Re-type psw"> Re-type password: <br><input type="password" name="re_password" placeholder="retype your password" required></label>
     <input type="hidden" name="site" value="data_store"></input>
      <br><button class="button" value="SignUP">SignUp</button>
   </form>
 ';
?>