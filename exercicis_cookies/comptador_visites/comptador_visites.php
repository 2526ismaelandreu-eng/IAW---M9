<?php
$producto1 = 29.90;
$producto2 = 49.90;
$producto3 = 89.00;
$seleccion = $_POST["producto"] ?? "";
$descuento = $_POST['descuento'] ?? '';
$cookie_contador = ($_COOKIE['contador'] ?? 0) + 1;
setcookie("contador", $cookie_contador, time() + 3600 * 24 * 30);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario de compra</title>
</head>
<body>

  <h1>Finalizar compra</h1>

  <form action="" method="post">

  <h2>Datos personales</h2>
  <p>
    <label for="nombre">Nombre completo:</label><br>
    <input type="text" id="nombre" name="nombre" required>
  </p>

  <h2>Pedido</h2>
  <p>
    <label for="producto">Producto:</label><br>
    <select id="producto" name="producto">
      <option value="producto1">Producto 1</option>
      <option value="producto2">Producto 2</option>
      <option value="producto3">Producto 3</option>
    </select>
  </p>

  <h2>Descuento</h2>
  <p>
  <?php 
    if ($cookie_contador >= 5 && $cookie_contador < 10) {
      echo "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    } elseif ($cookie_contador >= 10) {
      echo "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    }
  ?> <br><br>
    <label for="descuento">Código de descuento:</label>
    <input type="text" id="descuento" name="descuento">
  </p>
  <?php
  if ($seleccion === "producto1") {
    $total = $producto1;
} elseif ($seleccion === "producto2") {
    $total = $producto2;
} elseif ($seleccion === "producto3") {
    $total = $producto3;
}
  if ($descuento === "BOTIGA20") {
    $total_mult = $total*0.80;
    $cookie_contador = 0;
    setcookie("contador", $cookie_contador, time() + 3600 * 24 * 30);
    echo "<p>$total_mult</p>";
} elseif ($descuento === "BOTIGA50") {
    $total_mult = $total*0.50;
    $cookie_contador = 0;
    setcookie("contador", $cookie_contador, time() + 3600 * 24 * 30);
    echo "<p>$total_mult</p>";
}
  ?>
  <button id="comprar">Comprar</button>
  </form>
</body>
</html>