<?php
$con = mysqli_connect('localhost', 'root', '', 'table') or die('no connection found');
$username = $_POST['username'];
$password = $_POST['password'];
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);


$hash_password = md5('fdhbnjKFGVUT^%JHNVTR%hg+' . $password . 'FYRt65ty^%$IUG()&H'); //Hash Password User

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>

</html>