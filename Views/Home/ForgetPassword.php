<?php 
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.error-message {
    color: #ff0000;
    margin-top: 5px;
}

.form-submit {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 15px;
}

.form-submit:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
<div class="container">
        <h2>Forget Password</h2>
        <form action="../../Controllers/ForgetPassword.php" method="POST" novalidate>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <div class="error-message"><?php echo isset($_SESSION['usernameErrorMsg']) ? $_SESSION['usernameErrorMsg'] : ""; ?></div>
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password">
                <div class="error-message"><?php echo isset($_SESSION['passwordErrorMsg']) ? $_SESSION['passwordErrorMsg'] : ""; ?></div>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
                <div class="error-message"><?php echo isset($_SESSION['confirmPasswordErrorMsg']) ? $_SESSION['confirmPasswordErrorMsg'] : ""; ?></div>
            </div>
            <input type="submit" value="Reset Password" class="form-submit">
        </form>
    </div>
</body>
</html>
