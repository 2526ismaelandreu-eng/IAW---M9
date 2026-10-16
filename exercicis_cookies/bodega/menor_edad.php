<?php
include 'bodega.php';
$idioma = $_POST['idioma'];
$check_edad = $_POST['edad'] ?? 0;
if ($check_edad === 0 && $idioma === "ca") {
    echo "<h1>No et podem vendre alcohol si ets menor d’edat</h1>";
} elseif ($check_edad === 0 && $idioma === "es") {
    echo "<h1></h1>";
} elseif ($check_edad === 0 && $idioma === "en") {
    echo "<h1></h1>";
}  else {
    header("Location: bodega.php");
    exit;
} 
?>