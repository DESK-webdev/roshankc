<?php
    require"include.php";
    require"dec-bin.php";
    $a=0;
    exec("./serial",$p,$a);   //(port,result,returned)
    //echo $p[4];
    //print_r($p);
    show("header");
    $i=0;
    $status = array("green","red");
 echo "<div class=\"row upper-road\">";
    $bit=tobit($p[4]);
	//print_r($bit);
	$i=2;
    while($i>=0){
	$temp=$bit[$i];
        echo '<div class="col-2 '.$status[$temp].'"></div>';
        $i--;
    }
    echo "</div>";
    echo "<div class=\"row upper-road\">";
    
    echo "</div>
            <!--road-->
                <div class=\"road\">
                    <div class=\"row\">";
    $i=0;
    while($i<=3){
            echo "<div class=\"small-block\">
            </div>";
        $i++;
    }
    echo "
    </div>
</div>";
	echo "<div class=\"dark text-center\">
    <hr class=\"light\"> 
    <div class=\"foot\">
        <p class=\"lead\">Designed by Anjan Poudel.</p>
        </div>
      </div>";
	
    show("footer");
?>
