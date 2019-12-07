<?php
    $sql=simplexml_load_file("../../sql.xml");
    $conn=mysqli_connect($sql->host,$sql->user,$sql->password,$sql->database);
    if(!$conn){echo mysqli_connect_error();die;}
    echo '<form method="GET">
                <input name="name" placeholder="person_name"></input>
                <input name="about" placeholder="description"></input>
                <input name="photo" placeholder="photo url"></input>
                <input type="submit" value="submit" ></input>
            </form>';
    if($_GET['name'] && $_GET['bio'] && $_GET['photo']){
    $temp=str_replace(array("'","\""),"&quot",$_GET['bio']);
    $photo=str_replace(array("'"),"&quot",$_GET['photo']);
    $qry=mysqli_query($conn,"INSERT INTO `profiles` 
    VALUES 
        (   '0',
            '".$_GET['name']."',
            '".$temp."',
            '".$photo."')
         ");
    if(!$qry){echo mysqli_error($conn);echo "no";}
    else echo "done";
    }
    mysqli_close($conn);