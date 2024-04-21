<?php 
session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 400px;
}

.form-title {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    font-size: 16px;
    margin-bottom: 8px;
}

.form-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.error-message {
    color: #ff0000;
    margin-top: 5px;
}

.form-submit {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.form-submit:hover {
    background-color: #45a049;
}

.link-container {
    margin-top: 20px;
    text-align: center;
}

.link-text {
    font-size: 14px;
}

.link {
    color: #007bff;
    text-decoration: none;
    margin-left: 5px;
}

.link:hover {
    text-decoration: underline;
}

.form-submit {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    display: inline-block;
    width: 100%;
    text-align: center;
    text-decoration: none;
    margin-top: 20px;
    box-sizing: border-box;
}

.form-submit:hover {
    background-color: #45a049;
}


    </style>
</head>
<body>
    <table width="100%" height="100%">
        <tr>
            <td align="center" valign="middle">
                <form action="../../Controllers/Login.php" method="post">
                    <fieldset style="width: 300px;">
                        <legend>Login</legend>
                        <label for="username">Username:</label><br>
                        <input type="text" id="username" name="username" value=<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ""; ?> ><br><br>
                        <?php echo isset($_SESSION['usernameErrorMsg']) ? $_SESSION['usernameErrorMsg'] : ""; ?> <br>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password" ><br><br>
                        <?php echo isset($_SESSION['passwordErrorMsg']) ? $_SESSION['passwordErrorMsg'] : ""; ?> <br>
                        <input type="submit" value="Login" class="form-submit"> <br>
                        
                        <?php echo isset($_SESSION['Error']) ? $_SESSION['Error'] : ""; ?>
                        <!-- register -->
                        <br>
                        <span>Don't have an account?</span> 
                        <a href="Registration.php">Register</a>
                        
                    </fieldset>
                </form>
                <!-- Forget Password -->
                <a href="ForgetPassword.php">Forget Password</a>
            </td>
        </tr>
    </table>
</body>
</html>
