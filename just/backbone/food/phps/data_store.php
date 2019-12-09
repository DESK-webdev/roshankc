<?php
error_reporting(0);
    $selected=implode(",",$_GET['food']);
    define(get,$_GET);
    $sql=simplexml_load_file("../../../sql.xml");
    $conn=mysqli_connect($sql->host,$sql->user,$sql->password,$sql->database);
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
            '".$selected."')
         ");
    if(!$qry){echo mysqli_error($conn);echo "no";}
    else echo "done";
    mysqli_close($conn);
    //header("Location: index.php");
?> 