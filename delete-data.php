<?php 
require('include/connection.php');

extract($_REQUEST);

$sql= "DELETE FROM users WHERE user_id=$user_id";
$result= $conn->query($sql);

if($result==true) {
    header("location:select_data.php");
} else {
    echo $conn->error;
}
?>