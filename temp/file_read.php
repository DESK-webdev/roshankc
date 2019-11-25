<?php
    $file=fopen("x.html","r");
    while($p=fgets($file,10)){
        echo $p;
    }
    fclose($file);
?>