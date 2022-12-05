<?php
    include "config.php";

    $sql="SELECT *FROM users";

    $result= $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title> View Page </title>
    <linl rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>user</h2>
    <table class="table">
        <head>
            <tr>
            <th>ID</h2>
    <table class="table">
        <head>
            <tr>
            <th>ID</th><br>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Place</th>
            <th>Price</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Time</th>
        </th>
        </thread>
        <tbody>
            <?php
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
            ?>
                        <tr>
                        <td><?php echo $row['id'];?> </td>
                        <td><?php echo $row['firstname'];?> </td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['place'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['sdate'];?></td>
                        <td><?php echo $row['edate'];?></td>
                        <td><?php echo $row['tim'];?></td>
                        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>"> 
                        Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">
                        Delete</a></td>
                               </tr>

                        <?php       }
                }
                ?>

                </tbody>
            </table>
            </div>
        </body>
        </html>

                    }
                }