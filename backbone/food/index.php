<?php
    require "include.php";
    show("ht_element/header");
    show("ht_element/index_top");
    $food=simplexml_load_file("reference/food.xml");
     $i=1;
     $x="f".$i;
    while($item=($food->$x)){
        echo "
                <div class=\"form-check\">
                <label for=\"check1\" class=\"form-check-label\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"check1\" name=\"food[$i]\" value=\"$i\">
                    $item
                </label>
                </div>
        ";
        $i++;
        $x="f".$i;
    }
    show("ht_element/index_bottom");
    show("ht_element/footer");
?>