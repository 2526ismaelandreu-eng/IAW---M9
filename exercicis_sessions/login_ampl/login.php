<?php
session_start();

if (isset($_POST['user'], $_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user === "anna" && $pass === "anna") {
        $_SESSION['user'] = $user;
        header("Location: pagina1.php");
        exit;
    } else {
        header("Location: index.html");
        exit;
    }
} else {
    header("Location: index.html");
    exit;
}