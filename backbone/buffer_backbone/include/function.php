<?php
    function site($file,$data){
        include $file.".php";
        echo $data;
        echo "</div>";
    }
?>