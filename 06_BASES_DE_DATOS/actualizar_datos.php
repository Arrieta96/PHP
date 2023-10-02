<?php

$servername = "127.0.0.1:3366";
$username = "root";
$password = "";
$dbname = "myDB";


// Crear conexion
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexion
if (! $conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}


// Actualizar registro
$sql = "UPDATE empleados SET nombre='Felipe', apellidos='Arrieta' WHERE id=3";

if (mysqli_query($conexion, $sql)) {
  echo "Registro actualizado";
} else {
  echo "Error al actualizar registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>