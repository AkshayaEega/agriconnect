<?php
     include "config.php";

         $firstname ="kavitha";
         $lastname = "thoya";
         $place = "hanamkonda";
         $price = "1200";
         $sdate = "24-05-22";
         $edate = "12-106-22";
         $tim = "5:00am";

    $sql="INSERT INTO users (firstname ,lastname, place, price, sdate, edate, tim) VALUES ('$firstname', '$lastname', '$place', '$price', '$sdate', '$edate', '$tim')";
    
    $result=$conn->query($sql);
    echo $result;

    if($result == TRUE){
        echo "New record created successfully";
    }
    else {
        echo "Error:" . $sql . "<br>". $conn->error;}

        
?>