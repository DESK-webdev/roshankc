<?php require"dec-bin.php"; 
$a=0;
    exec("./serial",$p,$a);   //(port,result,returned)
    //echo $p[4];
    //print_r($p);
$status = array("green","red");
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="2">
</head>
<link rel="stylesheet" href="./css/style2.css">

<body>

<div class="body">

    <div class="road">
<?php
        $bit=tobit($p[4]);
	//print_r($bit);
	$i=2;
    while($i>=0){
	$temp=$bit[$i];
	echo '<div class="block"></div>';
        echo ' <a class="box" id="'.$status[$temp].'"></a>';
        $i--;
    }
?>
    </div>


    <div class="entrance">
        <div class="line">
            <div class="yellow_line"></div>
            <div class="yellow_line"></div>
            <div class="yellow_line"></div>
            <div class="yellow_line"></div>
            <div class="yellow_line"></div>
            <div class="yellow_line"></div>
        </div>
        <div class="white_stripes">
            <div class="white"></div>
            <div class="white"></div>
            <div class="white"></div>
            <div class="white"></div>
            <div class="white"></div>
           
        </div>
    </div>
</div>
    <div class="footer">
        <p style="color:white;float:right;">Designed by Anjan Paudel.</p>
    </div>
</body>
</html>
