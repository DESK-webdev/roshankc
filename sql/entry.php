<?php
    $sql=simplexml_load_file("../../sql.xml");
    $conn=mysqli_connect($sql->host,$sql->user,$sql->password,$sql->database);
    if(!$conn){echo mysqli_connect_error();die;}
    echo '<form method="GET">
                <input name="name" placeholder="name"></input>
                <input name="about" placeholder="description"></input>
                <input name="photo" placeholder="photo_url"></input>
                <select name="type"><option>food</option><option>person</option></select>
                <input type="submit" value="submit" ></input>
            </form>';
    if($_GET['name'] && $_GET['about'] && $_GET['photo']){
    $temp=str_replace(array("'","\""),"&quot",$_GET['about']);
    //$photo=str_replace(array("'"),"&quot",$_GET['photo']);
    if($_GET['type']=="person"){$db="profiles";}
    else{$db="foods";}
    $qry=mysqli_query($conn,"INSERT INTO $db 
    VALUES 
        (   '0',
            '".$_GET['name']."',
            '".$temp."',
            '".$_GET['photo']."')
         ");
    if(!$qry){echo mysqli_error($conn);echo "no";}
    else echo "done";
    }
    else echo "no";
    mysqli_close($conn);
?>
