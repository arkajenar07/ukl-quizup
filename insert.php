<?php
include('connect.php');  

// get the post records

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$con_pass = $_POST['con-pass'];

if ($password === $con_pass) {
    $sql = "INSERT INTO `pengguna` (`id_user`, `email`, `password`, `username`) VALUES ('', '$email', '$password', '$username')";
    // insert in database 
    $rs = mysqli_query($host, $sql);

    if($rs){  
        echo "<h1><center> Sign in successful, go to login page </center></h1>";
        echo "<a href='index-login.php'>Login</a>";
    }  
    
 } else {

    echo "<script> 
    window.location.href = 'index-register.php';
    alert(' Please enter same passwords ') </script>";
 }



?>