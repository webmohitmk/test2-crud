<?php 
require('connection.php');

$sql= "CREATE DATABASE user";
if($conn->query($sql)){
    echo "database created";
} else {
    echo $conn->error;
}
?>