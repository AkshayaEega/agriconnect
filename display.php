<?php
include("config.php")
<!DOCTYPE html>
<html >
<head>
   
    <title></title>
</head>
<body>
    <form action="" method="">
        Name<input type="text" name="name"><br>
        Name<input type="text" name="name"><br>
        Name<input type="text" name="name"><br>
        Name<input type="text" name="name"><br>
        Name<input type="text" name="name"><br>
        Name<input type="text" name="name"><br>
        Name<input type="text" name="name"><br>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        if(isset($_POST[`submit`]))
            $firstname =$_POST[`firstname`];
            $lastname = $_POST[`lastname`];
            $place = $_POST[`place`];
            $price = $_POST[`price`];
            $sdate = $_POST[`sdate`];
            $edate = $_POST[`edate`];
            $tim =$_POST[`tim`];

            $result=mysqli_query($mysqli,"INSERT into record values('','$firstname,'$lastname','$place','$price','$sdate','$edate','$tim')");
    
            if($result)
            {
                echo "success"
            }
            else{
                echo "failed";
            }
    
</body>
</html>