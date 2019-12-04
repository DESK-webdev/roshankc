<?php
error_reporting(0);
    $select=implode(",",$_GET['food']);
    define(get,$_GET);
    $conn=mysqli_connect("127.0.0.1","root","","test","3306");
    if(!$conn){echo mysqli_connect_error();}
    $qry=mysqli_query($conn,"INSERT INTO `data` 
    VALUES 
        (   '0',
            '".get['c_name'].".',
            '".get['m_name']."',
            '".get['country']."',
            '".get['city']."',
            '".get['street']."',
            '".get['phone']."',
            '".$select."')
         ");
    if(!$qry){echo mysqli_error($conn);echo "no";}
    else echo "done";
    mysqli_close($conn);
    //header("Location: index.php");
?> 