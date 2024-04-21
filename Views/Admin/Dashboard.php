<?php 
session_start();
require_once '../../Model/User.php';

if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
{
    
}
else{
    header('Location: ../Home/Login.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.dashboard-links {
    list-style-type: none;
    padding: 0;
}

.dashboard-links li {
    margin-bottom: 10px;
}

.dashboard-links li a {
    display: block;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.dashboard-links li a:hover {
    background-color: #45a049;
}

    </style>
</head>

<body>
<div class="container">
        <h1>Welcome to Dashboard, <?php echo $_SESSION['username'] ?></h1>
        <ul class="dashboard-links">
            <li><a href="User.php">Application User</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="ChangePassword.php">Change Password</a></li>
            <li><a href="OnBoardDoctor.php">Onboard Doctor</a></li>
            <li><a href="MedicineInventory.php">Medicine Inventory</a></li>
            <li><a href="../../Controllers/Logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>