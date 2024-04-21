<?php 

require_once 'Db.php';

//admin login
function ValidateLoginAdmin($Username, $Password)
{
    $con = getConnection();
    $stmt = $con->prepare("SELECT * FROM admin WHERE Username = ? AND Password = ?");
    $stmt->bind_param("ss", $Username, $Password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $_SESSION['Id'] = $row['Id'];
        return "admin";
    } 
    else 
    {
        return false;
    }
}


//Forget Password - admin 
function ForgetPasswordAdmin($Username, $Password)
{
    $con = getConnection();
    $stmt = $con->prepare("UPDATE admin SET Password = ? WHERE Username = ?");
    $stmt->bind_param("ss", $Password, $Username);
    $stmt->execute();
    return $stmt->affected_rows;
}

//change password - admin
function ChangePassword($Id, $Password)
{
    $con = getConnection();
    $stmt = $con->prepare("UPDATE admin SET Password = ? WHERE Id = ?");
    $stmt->bind_param("si", $Password, $Id);
    $stmt->execute();
    return $stmt->affected_rows;
}


function getUsers(){
    $con = getConnection();
    $stmt = $con->prepare("SELECT * FROM admin");
    $stmt->execute();
    $result = $stmt->get_result();
    $users = $result->fetch_all(MYSQLI_ASSOC);
    return $users;
}

//get admin profile data
function getUser($id){
    $con = getConnection();
    $stmt = $con->prepare("SELECT * FROM admin WHERE Id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user;
}
//update admin profile
function updateUser($id, $username, $password, $status){
    $con = getConnection();
    $stmt = $con->prepare("UPDATE admin SET Username = ?, Password = ?, Status = ? WHERE Id = ?");
    $stmt->bind_param("ssii", $username, $password, $status, $id);
    $stmt->execute();
    return $stmt->affected_rows;
}

//delete admin
function deleteUser($id){
    $con = getConnection();
    $stmt = $con->prepare("DELETE FROM admin WHERE Id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->affected_rows;
}












?>