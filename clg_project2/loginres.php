<?php
include('./inc/config.php');

$username = $_POST['username'];
    $password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE username = '$username' and password = '$password'";
//var_dump($username,$password);
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['username'] = $row ['username'];
       

       header('location:http://localhost/clg_project2/index.php');
    }
}else{
    echo 'wrong username/password..try again..';
}
 
?>