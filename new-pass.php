<?php
include('connect.php');
include('check-user.php');  


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // database insert SQL code
    $sql = "UPDATE `pengguna` SET `password`='$password' WHERE email = '$email'";

    // insert in database 
    $rs = mysqli_query($host, $sql);

    if($rs){  
        echo "<h1><center> UPDATE SUCCESS BRO!, go to login page </center></h1>";
        echo "<a href='index-login.php'>Login</a>";
    }   else{
        echo "<h1><center> GAGAL </center></h1>";
    }

}

?>