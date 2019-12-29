<?php /////////every thing needs to be end in here
    if(!$_GET['site']){
        $_GET['site']="home";
    }
    require 'include/function.php';
    include 'include/header.php';
    echo '<title>'.$_GET['site'].'</title>';
    echo '</head><body>';
    // include 'include/nav.php';
    // echo '</nav>';
    site($_GET['site'],$_GET['data']);
    echo '</body></html>';
?>