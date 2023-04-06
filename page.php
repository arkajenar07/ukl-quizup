<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
    }
</style>
<body>

        <p>website comming soon</p>
        <h1>USER TERDAFTAR</h1>
        <table border="1" class="table">
            <tr>
                <th>num</th>
                <th>Username</th>
            </tr>
            <?php
            include "connect.php";
            $sql = "SELECT username FROM `pengguna`;";
            $query_mysql = mysqli_query($host, $sql) or die(mysqli_error($host));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['username']; ?></td>
            </tr>
            <?php } ?>
        </table>

  
</body>
</html>