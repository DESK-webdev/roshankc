<?php
    function show($url){
        $file=fopen($url,"r");  ////home/roshan/git/AnjanPoudel/ap4/index.html
        while($gets=fgets($file)){
            echo $gets;
        }
    }
?>