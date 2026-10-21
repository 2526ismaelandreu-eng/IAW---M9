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
  <title>Inici</title>
</head>
<body>
  <nav>
    <a href="pagina1.php">Inici</a> |
    <a href="pagina2.html">Serveis</a> |
    <hr>
  </nav>
  <h1>Benvingut, <?php echo ($_SESSION['user']); ?>!</h1>
</body>
</html>