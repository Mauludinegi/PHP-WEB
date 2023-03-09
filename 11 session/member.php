<?php
session_start();
if ($_SESSION['login'] != true) {
    header('Location: /11 session/login.php');
    exit();
}
$say = "Hello ". $_SESSION['username'];
?>

<html>
    <body>
        <h1><?=$say?></h1>
        <a href="/11 session/logout.php">logout
        </a>
    </body>
</html>