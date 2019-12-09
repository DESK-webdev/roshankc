<?php
include "include.php";
    show("ht_element/header");
    show("ht_element/data_view_top");
    $conn=/*provided individually*/;
    if(!$conn){echo mysqli_connect_error();}
    $i=0;
    $result=Array( 
        'sn' => 'sn',
        'name_company' => "<b>shops</b>",
        'name_manager' => '<b>manager</b>',
        'location_country' => '<b>country</b>',
        'location_city' => '<b>city</b>',
        'location_street' => '<b>street</b>',
        'numbers' => '<b>phone number</b>',
        'food' => '<b>items available</b>'
        );
    while($result){
        echo (   
                 "<tr>".
                 "<td>".$result['sn']."</td>".
                 "<td>".$result['name_company']."</td>".
                 "<td>".$result['name_manager']."</td>".
                 "<td>".$result['location_country']."</td>".
                 "<td>".$result['location_city']."</td>".
                 "<td>".$result['location_street']."</td>".
                 "<td>".$result['numbers']."</td>".
                 "<td>".$result['food']."</td></tr>"
            );
        $i++;
        $qry=mysqli_query($conn,"select * from data where sn='".$i."';"); 
        $result=mysqli_fetch_assoc($qry);
      }
    mysqli_close($conn);
    show("ht_element/data_view_bottom");
    show("ht_element/footer");
?>