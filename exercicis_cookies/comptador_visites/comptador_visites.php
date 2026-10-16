<?php
$producto1 = 29.90;
$producto2 = 49.90;
$producto3 = 89.00;
$descuento = $_POST['descuento'] ?? '';
$cookie_contador = ($_COOKIE['contador'] ?? 0) + 1;
$descuento_gastado = ($_COOKIE['descuento'] ?? 'false') === 'true';
setcookie("contador", $cookie_contador, time() + 3600 * 24 * 30);
setcookie("descuento", $descuento_gastado, time() + 3600 * 24 * 30);
$descuento20 = "BOTIGA20";
$descuento50 = "BOTIGA50";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario de compra</title>
</head>
<body>

  <h1>Finalizar compra</h1>

  <form action="./comptador_visites.php" method="post">

  <h2>Datos personales</h2>
  <p>
    <label for="nombre">Nombre completo:</label><br>
    <input type="text" id="nombre" name="nombre" required>
  </p>
  <p>
    <label for="email">Correo electrónico:</label><br>
    <input type="email" id="email" name="email">
  </p>

  <h2>Dirección de envío</h2>
  <p>
    <label for="direccion">Dirección:</label><br>
    <input type="text" id="direccion" name="direccion">
  </p>
  <p>
    <label for="ciudad">Ciudad:</label><br>
    <input type="text" id="ciudad" name="ciudad">
  </p>
  <p>
    <label for="cp">Código postal:</label><br>
    <input type="text" id="cp" name="cp">
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
  <p>
    <label for="cantidad">Cantidad:</label><br>
    <input type="number" id="cantidad" name="cantidad" value="1" min="1">
  </p>

  <h2>Descuento</h2>
  <p>
    <label for="descuento">Código de descuento:</label><br>
    <input type="text" id="descuento" name="descuento">
  </p>
  <button id="comprar">Comprar</button>
</body>
</html>