<?php
    $file=fopen("data_in","r");  ////home/roshan/git/AnjanPoudel/ap4/index.html
    while($gets=fgets($file)){
      echo $gets;
}
?>