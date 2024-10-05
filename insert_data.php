<?php
require('connection.php');

extract($_REQUEST);
$password = sha1($_POST['mypassword']);

$sql = "INSERT INTO users(username,email,age,password) VALUES('$username','$myemail','$age','$password')";

if ($conn->query($sql)==true) {
    header("Location:form.php?msg = data inserted");
} else {
    echo $conn->error;
}

?>