<?php
     include "p1.php";

         $nam ="sarayu";
         $email="sarayupatel@gmail.com";
         $mobilenumber="9823465412";
         $sql="INSERT INTO bro (nam ,email,mobilenumber) VALUES ('$nam', '$email','$mobilenumber')";
    
    $result=$conn->query($sql);
    echo $result;

    if($result == TRUE){
        echo "New record created successfully";
    }
    else {
        echo "Error:" . $sql . "<br>". $conn->error;}

        
?>