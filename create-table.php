<?php 
require('connection.php');

$sql= "CREATE TABLE users(
user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(200) NOT NULL,
email VARCHAR(250) NOT NULL,
age VARCHAR(100) NOT NULL,
password VARCHAR(200) NOT NULL
)";

if($conn->query($sql)){
    echo "table created";
} else {
    echo $conn->error;
}

?>