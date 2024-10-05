<?php 
require('connection.php');
$user_id= $_POST['user_id'];
$name= $_POST['username'];
$email= $_POST['myemail'];
$age= $_POST['age'];

$sql= "UPDATE users SET username='$name', email='$email', age='$age' WHERE user_id= $user_id";
$result= $conn->query($sql);

if($result==true) {
    header("Location:select_data.php");
} else {
    echo $conn->error;
}


?>