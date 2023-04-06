<?php      
    include('connect.php'); 

    if(isset($_POST['submit'])){
        $email = $_POST['email'];  
        $password = $_POST['password'];
        //select data
        $sql = "SELECT * FROM `pengguna` WHERE email = '$email' AND password = '$password'";  
        $result = mysqli_query($host, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location:page.php");
        }  
        else{  
            echo '<script>
            window.location.href = "index-login.php";
            alert("Login Invalid! CHECK EMAIL OR PASSWORD AGAIN ");
            </script>';

        }  

    }
        
?>