<?php
include 'connect.php';

?>



<html>
<head><title>Display Users</title>

</head><body>
    <div class="container">
    <a href="index.php"><button name='add-user' >Add user</button></a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="Select * from users";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr><th>'.$id.'</th>'.'<td>'.$name.'</td>'.'<td>'.$email.'</td>'.'<td>'.$mobile.'</td>'.'<td>'.$password.'</td>'.
        '<td><button><a href="update.php?id='.$id.'">Update</a></button><button><a href="delete.php?id='.$id.'">Delete</a></ die(mysqli_error($con)) ;die(mysqli_error($con)) ;button></td></tr>';
                                                                                                                                                   
    }
    
}
    ?>
    
  </tbody>
</table>
    </div>
    
    
    
    <?php


?></body>
</html>