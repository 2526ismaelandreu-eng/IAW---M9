<?php
if (isset($_POST['lang']) && isset($_POST['coin'])) {
  $idioma_cookie = $_POST['lang']; #hay que llamar al name, no a la id.
  $check_edad_cookie = $_POST['edad'] ?? 0  ; # A la hora de recibir info del form al post lo que se envia es una string (importante si el valor que estabamos enviando es un int).
  $moneda_cookie = $_POST['coin'];
  setcookie("moneda", $moneda_cookie, time() + 3600 * 24 * 30, "/"); # La parte del time es para decirle basicamente, (el tiempo de ahora + 30 dias)
  setcookie("majoredat", $check_edad_cookie, time() + 3600 * 24 * 30, "/"); # 3600 segundos en una hora, 3600 * 24 segundos en un dia.
  setcookie("idioma", $idioma_cookie, time() + 3600 * 24 * 30, "/"); # 3600 * 24 * 30 segundos en 30 dias
  header("Location: bodega.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tienda de vino</title>
</head>
<body>
  <h1>Tienda de vino</h1>

  <form action="" method="post">

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