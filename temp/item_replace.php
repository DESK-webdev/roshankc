<?php
    function replace($x){
        $input=explode(",",$x);
        //print_r($input);
        $data=simplexml_load_file("../global/dictionary.xml");
        //print_r($data);
        $i=0;
        while($up=$input[$i]){
            $output[$i]=$data->$up;
            $i++;
        }
        echo implode(",",$output);
    }
    replace("item,item1,item,item1");
?>