<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>update form</h3>
        <?php 
        require('connection.php');
        $user_id= $_GET['user_id'];
        $sql= "SELECT username,email,age FROM users WHERE user_id= $user_id";
        $result= $conn->query($sql);
            while($row= $result->fetch_object()){
        ?>
        <form action="update-data.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" placeholder="Enter your name" value="<?php echo $row->username ?>">
            
            <label for="myemail">Email:</label>
            <input type="email" id="myemail" name="myemail" placeholder="Enter your email" value="<?php echo $row->email ?>">
            
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" placeholder="Enter your age" value="<?php echo $row->age ?>">
            
            <!-- <label for="mypassword">Password:</label>
            <input type="password" id="mypassword" name="mypassword" placeholder="Enter your password"> -->
            
            <button type="submit">Submit</button>
            <?php } ?>
            
        </form>
    </div>
</body>
</html>
