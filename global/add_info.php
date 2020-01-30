<?php
    session_start();
    if(!$_SESSION){header("Location: /register.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register_form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<?php include 'include/nav.php'; nav(1,1); ?>
    <div class="register_container_3" id="register_container_3">
        <div class="register_form_3">
        <form action="/include/data_store.php" method="POST" enctype="multipart/form-data">
        <?php
        if($_GET['cache']=="3"){
            echo '
                <h1>Hotel\'s information</h1>
                <label for="#">Your name:
                <input type="text" name="manager_name" placeholder="Manager-Name" /> 
                </label>
                <label for="#">Enter about your hotel:<br>
                <textarea name="hotel_bio"  cols="50" rows="3" placeholder="Enter about hotel"></textarea>
                </label>
                <label for="opening time">Opening-time:
                <input type="time" name="open_time" placeholder="Opening-Time" />
                </label>
                <label for="closing time">Closing-time:
                <input type="time" name="close_time" placeholder="Closing-Time" />
                </label>
                <input type="hidden" value="3" name="cache" />
                 ';
            }
            else if($_GET['cache']=="4"){
            echo '
                <h1>Add Your Information</h1>
                <input type="hidden" value="4" name="cache" />
            ';
            }
            ?>
            <label for="email">E-mail:
		    <input type="email" name="email" placeholder="Email" />
            </label>
            <label for="address">Address: 
	        <input type="text" name="address" placeholder="enter your address">
	        </label>
            <label for="photo">Your Photo:
	        <input type="file" name="image">
		    </label>
            <button>submit</button>
            </form>
        </div>
    </div>
</body>
</html>
