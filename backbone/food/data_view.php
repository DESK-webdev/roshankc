<?php
include "include.php";
    show("ht_element/header");
    show("ht_element/data_view_top");
    $conn=mysqli_connect("127.0.0.1","root","","test","3306");
    if(!$conn){echo mysqli_connect_error();}
    $i=0;
    $result=Array( 
        'sn' => 'sn',
        'name_company' => "<b>shops</b>",
        'name_manager' => '<b>manager</b>',
        'location_country' => '<b>country</b>',
        'location_city' => '<b>city</b>',
        'location_street' => '<b>street</b>',
        'number' => '<b>phone number</b>',
        'foods' => '<b>items available</b>'
        );
    while($result){
        //if(!$qry){echo mysqli_error($conn);echo "no";}
        echo (   
                 "<tr>".
                 "<td>".$result['sn']."</td>".
                 "<td>".$result['name_company']."</td>".
                 "<td>".$result['name_manager']."</td>".
                 "<td>".$result['location_country']."</td>".
                 "<td>".$result['location_city']."</td>".
                 "<td>".$result['location_street']."</td>".
                 "<td>".$result['number']."</td>".
                 "<td>".$result['foods']."</td></tr>"
            );
        $i++;
        $qry=mysqli_query($conn,"select * from data where sn='".$i."';"); 
        $result=mysqli_fetch_assoc($qry);
      }
    mysqli_close($conn);
    show("ht_element/data_view_bottom");
    show("ht_element/footer");
?>