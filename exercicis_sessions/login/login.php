<?php
session_start();

$usuaris = [
    'anna' => '1234',
    'joan' => 'abcd',
];

if (isset($_POST['user'], $_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (isset($usuaris[$user]) && $usuaris[$user] === $pass) {
        $_SESSION['user'] = $user;
        echo "Benvingut, " . $user . "!";
    } else {
        echo "Usuari o contrasenya incorrectes.";
    }
} else {
    echo "Falten dades.";
}
?>