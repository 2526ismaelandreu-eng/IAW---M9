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
    <?php echo ($_SESSION['user']); ?> |
    <a href="./pagina1.php">Inici</a> |
    <a href="./pagina2.php">Serveis</a> 
    <a href="./pagina2.php<?php echo session_name()."=".session_id()?>"></a>
    <hr>
  </nav>
  <h1>Benvingut</h1>
</body>
</html>