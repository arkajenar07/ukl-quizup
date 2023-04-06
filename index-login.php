
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    
    <div class="side">
        <ul id="ul">
            <li class="list active">
                <a href="#">
                    <img src="icon/home.png" class="icon">
                    <span class="text">HOME</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <img src="icon/feedback.png" class="icon">
                    <span class="text">FEEDBACK</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <img src="icon/about_us.png" class="icon">
                    <span class="text">ABOUT US</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="page">
        <div class="title">
            <h1>QUIZ UP!</h1>
            <p>Welcome to Quiz Up! The ultimate course quiz game for students of all ages! Challenge yourself and test your knowledge!</p>
        </div>

        <div class="log-in">
            <a href="#"><button class="settings-button" > <img src="icon/settings.png" class="icon" ></button></a>
            <div class="form">
            <h1>LOGIN</h1>
            <form action="validate.php" method="post" name="login-form" class="input-submit">
                <div class="email">
                    <label for="email">EMAIL</label>
                    <input type="text" id="email" name = "email" autocomplete="off">
                </div>
                <div class="pass">
                    <label for="password">PASSWORD</label>
                    <div class="input-pass">
                        <input type="password" id="password" name = "password" class="password">
                        <img src="icon/hide.png" class="eye-toggle" id="eye" onclick="showpass()">
                    </div>
                </div>

                <a href="forgot-password.php" class="forgot-pass" >FORGOT PASSWORD ?</a>

                <button type="submit" name="submit" class="submit">LOGIN</button>
            </form>
            
            <span class="go-to-register">Don't have an account ? </span>
            <a href="index-register.php" class="regis">REGISTER</a>
            </div>
            
            

        </div>
    </div>
    <script>
        var ul = document.getElementById("ul");

        // Get all buttons with class="btn" inside the container
        var list = ul.getElementsByClassName("list");

        // Loop through the buttons and add the active class to the active/clicked button
        for (var i = 0; i < list.length; i++) {
          list[i].addEventListener("click", function() {
            var active = document.getElementsByClassName("active");
            active[0].className = active[0].className.replace(" active", "");
            this.className += " active";
          });
        }

        function showpass() {
            var x = document.getElementById("password");
            var y = document.getElementById("eye");
            if (x.type === "password") {
              x.type = "text";
              y.src = 'icon/eye.png';
            
            } else {
              x.type = "password";
              y.src = 'icon/hide.png';
            
            }
        }
    </script>
</body>
</html>