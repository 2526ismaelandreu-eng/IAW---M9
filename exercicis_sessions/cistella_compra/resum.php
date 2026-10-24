<?php
session_start();

$totalCompra = 0;

if (isset($_SESSION['cistella'])) {
    foreach ($_SESSION['cistella'] as $producte => $dades) {
        echo $producte . " - " . $dades['preu'] . " € x " . $dades['quantitat'] . " = " . $dades['total'] . " €<br>";
        $totalCompra += $dades['total'];
    }
}

echo "Total: " . $totalCompra . " €";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Botiga</title>
</head>
<body>
<hr>
  <a href="./finalizar.php">Finalitzar compra</a>
</body>
</html>