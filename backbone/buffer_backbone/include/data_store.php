<?php
 error_reporting(0);
 if(strcmp($_GET['password'],$_GET['re_password'])!=0){
    header("Location: /?site=register&data=password did't match!");
 }
 else{
    $sql=simplexml_load_file("../../../sql.xml");
    $conn=mysqli_connect($sql->host,$sql->user,$sql->password,$sql->database);
    if(!$conn){echo mysqli_connect_error();}
    $qry=mysqli_query($conn,"INSERT INTO `hotel` 
    VALUES 
        (   '0',
            '".$_GET['hotel_name']."',
            '".$_GET['phone']."',
            '".$_GET['re_password']."',
            ''
            )
         ");
    if(!$qry){echo "error::".mysqli_error($conn);echo "no";}
    else echo "done";
    mysqli_close($conn);
 }
    //header("Location: /");
?> 