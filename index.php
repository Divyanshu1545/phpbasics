<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="insert into users (name,mobile,email,password) values('$name','$phone','$email','$password')";

    $result=mysqli_query($con,$sql);

    if($result){
        header("location: display_users.php");
        //echo "Data Entered Successfully";
    }else{
        die(mysqli_errno($con));
    }
}

?>



<html>
<head><title>Add User</title>
<link rel="stylesheet" href="style.css">
</head><body>
    
    <div class="container"><form method="POST">
        <label for="username" class="labels"> User Name</label><br><br>
        <input type="text" name="username" autocomplete="off"><br><br>
        <label for="email"class="labels">Email</label><br><br>
        <input type="text" name="email" autocomplete="off"><br><br>
        <label for="phone"class="labels">Phone</label><br><br>
        <input type="text" name="phone" autocomplete="off"><br><br>
        <label for="password"class="labels">Password</label><br><br>
        <input type="password" name="password" autocomplete="off"><br><br>
        <input type="submit" value="submit" name="submit">
    
    </form></div>
    
    
    
    
    <?php


?></body>
</html>