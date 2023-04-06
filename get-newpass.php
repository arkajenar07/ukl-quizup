
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    
@import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Share Tech Mono', monospace;
}

.form{
    background-color: #EFF6F8;
    width: 600px;
    height: 400px;
    padding: 32px;
    display: flex;
    flex-direction: column;
    border: 1px solid #EFF6F8;
    border-radius: 30px;
    margin: auto;
}

</style>

<body>
    <form action="new-pass.php" name="forgot-form" method="POST" class="form">
        <label for="password">PASSWORD</label>
            <div class="input-pass">
                <input type="password" id="password" name = "password" class="password" required>
                <img src="icon/hide.png" class="eye-toggle" id="eye" onclick="showpass()">
            </div>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <script>
        function showpass() {
            var x = document.getElementsByClassName("password");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            
            }
        }
    </script>
</body>

</html>