<?php
//{issue check of sql
//echo phpinfo();
   // $conn=mysqli_connect("127.0.0.1","","","test","3306");
   // if(!$conn){echo mysqli_connect_error();}
   // $result=mysqli_query($conn,"select * from roshan where name=\"bibek\";");
   // $result1=mysqli_fetch_assoc($result);
   // print_r($result1);
    //mysqli_close($conn);
    //}

  //{ test of external resourse streaming
    // $x=include "item_replace.php";
    // print_r($x);
    $file=fopen("data_in","r");  ////home/roshan/git/AnjanPoudel/ap4/index.html
	  while($gets=fgets($file)){
	    echo $gets;
  }
  //}
?>
<?php
  // $x=[5,6,7,4,7];
  // $y=implode(",",$x);
  // echo $y."<br>";
  // print_r(explode(",",$y));
?>
