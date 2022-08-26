<?php
include('./inc/config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username,email,password) VALUES (?,?,?)";
if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $param_name,$param_email,$param_password);
    //Set parameters
    $param_name = $name;
    $param_email = $email;
    $param_password = $password;
    //Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo 'user created <a href="./login.php">click here to login</a>';
    }
}
?>