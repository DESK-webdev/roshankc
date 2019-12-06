<?php
    $conn=/*provided individually*/;
    if(!$conn){echo mysqli_connect_error();die;}
    echo '<form method="GET">
                <input name="food_name" placeholder="food_name"></input>
                <input name="about" placeholder="description"></input>
                <input type="submit" value="submit" ></input>
            </form>';
    if($_GET['food_name'] && $_GET['about']){
    $temp=str_replace(array("'","\""),"&quot",$_GET['about']);
    echo $temp;
    $qry=mysqli_query($conn,"INSERT INTO `foods` 
    VALUES 
        (   '0',
            '".$_GET['food_name']."',
            '".$temp."')
         ");
    if(!$qry){echo mysqli_error($conn);echo "no";}
    else echo "done";
    }
    mysqli_close($conn);
?>
