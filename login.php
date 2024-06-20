<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
      
body {
    font-family: Arial, sans-serif;
    background-color: 3572EF;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url(stock_4.jpg);
    
}
.login-container {
    background-color: #fff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.login-container h2 {
    margin-bottom: 20px;
}
.login-container label {
    display: block;
    margin-bottom: 8px;
}
.login-container input[type="email"],
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.login-container input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}
.login-container input[type="submit"]:hover {
    background-color: #45a049;
}
nav h3{
   color:blue;
   background-color:A7E6FF;
}
    </style>
</head>
<body>


    <div class="login-container">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" name="submit" value="Login">
            
            <a href="Task.php">back_to_home</a>
        </form>
        <br>
            <div class="card-footer">
                <small>&copy; Stock-Market</small>
            </div>
    </div>

    
</body>
</html>
