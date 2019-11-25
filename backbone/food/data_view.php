<?php
    $conn=mysqli_connect("127.0.0.1","root","","test","3306");
    if(!$conn){echo mysqli_connect_error();}
    $i=0;
    $file=fopen("table_header","r");
    while($buff=fgets($file)){
        echo $buff;
    }
    fclose($file);
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
    $file=fopen("table_footer","r");
    while($buff=fgets($file)){
        echo $buff;
    }
    fclose($file);
    mysqli_close($conn);
?>