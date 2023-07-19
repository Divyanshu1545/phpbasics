<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    echo $id;
    $sql="delete from `users` where id='$id'";
    $result=mysqli_query($con,$sql);
    if ($result) {
        echo "Deleted Successfully";
        header("location: display_users.php");
    }else{ 
        die(mysqli_error($con));
    }
}


?>