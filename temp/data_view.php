<?php
    $conn=mysqli_connect("127.0.0.1","root","","test","3306");
    if(!$conn){echo mysqli_connect_error();}
    $i=0;
    $result=Array( 
        'sn' => 'sn',
        'name_company' => "shops",
        'name_manager' => 'manager',
        'location_country' => 'country',
        'location_city' => 'city',
        'location_street' => 'street',
        'number' => 'phone number',
        'foods' => 'items available'
        );
    while($result){
        //if(!$qry){echo mysqli_error($conn);echo "no";}
        echo ($result[sn]."  "
                .$result[name_company]."  "
                .$result[name_manager]."  "
                .$result[location_country]."  "
                .$result[location_city]."  "
                .$result[location_street]."  "
                .$result[number]."  "
                .$result[foods]."<br>");
        $i++;
        $qry=mysqli_query($conn,"select * from data where sn='".$i."';"); 
        $result=mysqli_fetch_assoc($qry);
      }
    mysqli_close($conn);
?>