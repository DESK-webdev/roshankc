<?php 
 function tobit($dec){
$i=1;
$as=1;
    while($i<=3){
        $byte[$i]=($dec&($as))?1:0;
        $as=$as<<1;
        $i++;
    }
$j=0;
for($i=3;$i>=1;$i--){
	$result[$j]=$byte[$i];
	$j++;
}
return $result;
//print_r($byte);
}
?>
