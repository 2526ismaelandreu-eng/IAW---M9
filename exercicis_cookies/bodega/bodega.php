<?php
$idioma = $_POST['lang']; #hay que llamar al name, no a la id.
$check_edad = $_POST['edad'] ?? 0; # A la hora de recibir info del form al post lo que se envia es una string (importante si el valor que estabamos enviando es un int).
$moneda = $_POST['coin'];
$garrigues = 25; # Esto esta en euros
$terrases = 50; # Esto esta en euros
setcookie("moneda", $moneda, time() + 3600 * 24 * 30); # La parte del time es para decirle basicamente, (el tiempo de ahora + 30 dias)
setcookie("majoredat", $check_edad, time() + 3600 * 24 * 30); # 3600 segundos en una hora, 3600 * 24 segundos en un dia.
setcookie("idioma", $idioma, time() + 3600 * 24 * 30); # 3600 * 24 * 30 segundos en 30 dias
if ($check_edad == 0) { # A la hora de añadir comparaciones con and ambos tienen que estar dentro del mismo parentesis.
  header("Location: menor_edad.html");
  exit;
} elseif ($check_edad == 18 && $idioma === "ca" && $moneda === "eur") { #Se podria hacer un array de objetos para comprobar todas las posibilidades en vez de estar haciendo tantos elseif (no lo voy a hacer).
  echo "T’oferim el vi “Les Garrigues” a un preu de ". $garrigues ." €";
  echo "<br>";
  echo "T’oferim el vi “Les Terrasses” a un preu de 39 €";  
} elseif ($check_edad == 18 && $idioma === "es" && $moneda === "eur") {
  echo "Te ofrecemos el vino “Les Garrigues” a un precio de ". $garrigues ." €";
  echo "<br>";
  echo "Te ofrecemos el vino ”Les Terrasses” a un precio de ". $terrases ." €";
} elseif ($check_edad == 18 && $idioma === "en" && $moneda === "eur") {
  echo "We're offering you ”Les Garrigues” wine for ". $garrigues ." €";
  echo "<br>";
  echo "We offer you the wine ”Les Terrasses” at a price of ". $terrases ." €";
} elseif ($check_edad == 18 && $idioma === "ca" && $moneda === "usd") {
  echo "T’oferim el vi “Les Garrigues” a un preu de ". $garrigues*1.21 ." $";
  echo "<br>";
  echo "T’oferim el vi “Les Terrasses” a un preu de ". $terrases*1.21 ." $"; 
} elseif ($check_edad == 18 && $idioma === "es" && $moneda === "usd") {
  echo "Te ofrecemos el vino “Les Garrigues” a un precio de ". $garrigues*1.21 ." $";
  echo "<br>";
  echo "Te ofrecemos el vino ”Les Terrasses” a un precio de ". $terrases*1.21 ." $";
} elseif ($check_edad == 18 && $idioma === "en" && $moneda === "usd") {
  echo "We're offering you ”Les Garrigues” wine for ". $garrigues*1.21 ." $";
  echo "<br>";
  echo "We offer you the wine ”Les Terrasses” at a price of ". $terrases*1.21 ." $";
} elseif ($check_edad == 18 && $idioma === "ca" && $moneda === "lib") {
  echo "T’oferim el vi ”Les Garrigues” a un preu de ". $garrigues*0.842 ." £";
  echo "<br>";
  echo "T’oferim el vi “Les Terrasses” a un preu de ". $terrases*0.842 ." £";
} elseif ($check_edad == 18 && $idioma === "es" && $moneda === "lib") {
  echo "Te ofrecemos el vino “Les Garrigues” a un precio de ". $garrigues*0.842 ." £";
  echo "<br>";
  echo "Te ofrecemos el vino ”Les Terrasses” a un precio de ". $terrases*0.842 ." £";
} elseif ($check_edad == 18 && $idioma === "en" && $moneda === "lib") {
  echo "We're offering you ”Les Garrigues” wine for ". $garrigues*0.842 ." £";
  echo "<br>";
  echo "We offer you the wine ”Les Terrasses” at a price of ". $terrases*0.842 ." £";
}
?>