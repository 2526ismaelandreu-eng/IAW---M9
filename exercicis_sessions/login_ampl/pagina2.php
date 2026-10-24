<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Serveis</title>
</head>
<body>
  <nav>
    <?php echo ($_SESSION['user']); ?> |
    <a href="./pagina1.php?<?php session_destroy();?>">Cerrar sesion</a> |
    <a href="./pagina1.php?<?php echo session_name()."=".session_id()?>">Inici</a>
    <a href="./pagina2.php?<?php echo session_name()."=".session_id()?>">Serveis</a>
    <hr>
  </nav>
  <hr>

  <h1>Els nostres serveis</h1>
  <p>Aquests són alguns dels serveis que oferim:</p>
  <ul>
    <li>Consultoria personalitzada</li>
    <li>Desenvolupament web</li>
    <li>Suport tècnic</li>
  </ul>
  <p>Contacta amb nosaltres per a més informació.</p>
</body>
</html>