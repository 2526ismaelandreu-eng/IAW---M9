<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasenya = "";
    $basedatos = "cosodatabase";

    $conn = mysqli_connect($servidor, $usuario, $contrasenya, $basedatos)
        or die("Problemas con la conexión");

    $registros = mysqli_query($conn, "select nombre, email, codigocurso from alumnos")
        or die("Problemas en el select" . mysqli_error($conn));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre: " . $reg['nombre'] . "<br>";
        echo "Email: " . $reg['email'] . "<br>";
        echo "Código de curso: " . $reg['codigocurso'] . "<br>";
        echo "<hr>";
    }
