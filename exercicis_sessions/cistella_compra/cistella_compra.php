<?php
session_start();

$producte = $_POST['producte'];
$preu = $_POST['preu'];
$quantitat = $_POST['quantitat'];
$total = $_POST['preu'] * $_POST['quantitat'] ?? 0;
$_SESSION['cistella'][$producte] = ['preu' => $preu, 'quantitat' => $quantitat, 'total' => $total];
# Esto lo que hace es dentro de la session, dentro de la array cistella, crea por producto que se añada una entrada a esta array, que luego se guarda en la sesion.
header("Location: index.html");
?>