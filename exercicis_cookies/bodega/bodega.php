<?php
$idioma = $_POST['lang']; #hay que llamar al name, no a la id.
$check_edad = $_POST['edad'] ?? 0;
if ($check_edad === 0 && $idioma === "ca") {
    header("Location: menor_edad.php");
    exit;
} elseif ($check_edad === 0 && $idioma === "ca") { # A la hora de añadir comparaciones con and ambos tienen que estar dentro del mismo parentesis.
    header("Location: menor_edad.php");
    exit;
} elseif ($check_edad === 0 && $idioma === "es") {
    header("Location: menor_edad.php");
    exit;
}  elseif ($check_edad === 0 && $idioma === "en") {
    header("Location: menor_edad.php");
    exit;
}  elseif ($)
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>BTienda de vino</title>
</head>
<body>
  <h1>Tienda de vino</h1>

  <form action="menor_edad.php" method="post">

    <fieldset id="idioma">
      <legend>Idioma</legend>
      <input type="radio" name="lang" id="l-ca" value="ca" checked>
      <label for="l-ca">Català</label>
      <input type="radio" name="lang" id="l-es" value="es">
      <label for="l-es">Español</label>
      <input type="radio" name="lang" id="l-en" value="en">
      <label for="l-en">English</label>
    </fieldset>

    <fieldset id="moneda">
      <legend>Moneda</legend>
      <input type="radio" name="coin" id="eur" value="eur" checked>
      <label for="eur">Euro</label>
      <input type="radio" name="coin" id="lib" value="lib">
      <label for="lib">Libras</label>
      <input type="radio" name="coin" id="usd" value="usd">
      <label for="usd">Dolares</label>
    </fieldset>

    <fieldset>
      <legend>¿Tienes 18 años o más?</legend>
      <input type="checkbox" name="edad" id="edad" value="18">
      <label for="edad">Sí, tengo 18 años o más</label>
    </fieldset>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>