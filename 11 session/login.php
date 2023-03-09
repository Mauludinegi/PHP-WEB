<?php
session_start();
if($_SESSION['login'] == true) {
    header('Location: /11 session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['username'] == "mamat" && $_POST['password'] == 1234) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = "mamat";
        header("Location: /11 session/member.php");
    } else {
        $error = "login gagal";
    }
}
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
    <?php
    if ($error != "") { ?>
        <h2><?=$error?></h2>
    <?php }?>
    <h1>Login</h1>
    <form action="/11 session/login.php" method="post">
        <label>Username: 
            <input type="text" name="username">
        </label>
        <br>
        <br>
        <label style="margin: 2px;">Password: 
            <input type="password" name="password">
        </label>
        <br>
        <br>
        <input type="submit" value="login" style="margin-left: 100px; width: 100px">
    </form>
</body>
</html>