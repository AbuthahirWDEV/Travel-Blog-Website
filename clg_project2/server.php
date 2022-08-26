<?php
include('./inc/config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (fullname,email,message) VALUES (?,?,?)";
if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $param_name,$param_email,$param_message);
    //Set parameters
    $param_name = $name;
    $param_email = $email;
    $param_message = $message;
    //Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo 'you have successfully submitted form,  we will contact you within 24 hours';
    }
}
?>