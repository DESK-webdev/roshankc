<?php 
$i=1;
$as=1;
$dec=1;
    while($i<=4){
        echo ($dec&($as))?1:0;
        $as=$as<<1;
        $i++;
    }
?>