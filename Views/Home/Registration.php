<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>
<div class="container">
        <h1>Admin - Registration</h1>
        <form action="../../Controllers/AdminRegistration.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <input type="submit" value="Register" class="form-submit">
        </form>
        <!-- back to home button -->
        <div class="link-container">
            <span class="link-text">Already have an account?</span>
            <a href="Login.php" class="link">Login</a>
</div>
    </div>
</body>
</html>