<?php      
    include('connect.php'); 

    if(isset($_POST['submit'])){
        $email = $_POST['email'];  
        //select data
        $sql = "SELECT * FROM `pengguna` WHERE email = '$email'";  
        $result = mysqli_query($host, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location:get-newpass.php");
        }  
        else{  
            echo '<script>
            window.location.href = "forgot-password.php";
            alert("EMAIL NOT FOUND! TRY AGAIN!");
            </script>';

        }  

    }
        
?>