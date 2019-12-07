<?php
    function show($url){
        $file=fopen($url,"r");  
        while($gets=fgets($file)){
            echo $gets;
        }
    }
    function image($url,$p){
        $pos=strpos($url,"/");
        $type="";
        $name=substr($url,$pos+1);
        $tag=str_replace(array(".jpg",".jpeg",".webp")," ",$name);
        if($p==1){$type="active";}
        echo '<div class="carousel-item '.$type.'">          
        <img src="'.$url.'">
        <div class="carousel-caption">
                <div class="container">
                        <div class="search">
                                <div class="search-box">
                                        <input type="text" name="search" placeholder="Type a Search" class="search-text">
                                        <a class="search-btn" href="#">
                                                <i class="fas fa-search"></i>
                                        </a>
                                </div>
                                
                        </div>
                </div>                    
            <h3 class="display-4 ">'.$tag.'</h3>
            <p>Mesmerising taste can make your day!</p>
        </div>
    </div>';
    }
    function plate($i,$link,$table){
        $j=0;
        $sql=simplexml_load_file("../../../sql.xml");
        $conn=mysqli_connect($sql->host,$sql->user,$sql->password,$sql->database);
        if(!$conn){echo mysqli_connect_error();die;}
        $qry=mysqli_query($conn,"SELECT * from ".$table.";");
        $data=mysqli_fetch_all($qry);
        while($j<=$i && $data[$j]){
        $temp=str_replace('&quot',"'",$data[$j]);
        echo '
        <div class="col-sm-4">                 
            <div class="card" style="width:300px;  height:500px;">
                <img  class="card-img-top" src="'.$temp[3].'" alt="'.$temp[1].'" style="height:55%">
                <div class="card-body">
                    <h1 class="card-head">'.$temp[1].'</h1>
                    <p class="card-text">'.$temp[2].'</p>
                    <a class="btn btn-success stretched-link" href="work in progress/work in progress.html"> '.$link.' </a>
                </div>
            </div>
        </div>';
        $j++;
        }
        mysqli_close($conn);
    }
?>