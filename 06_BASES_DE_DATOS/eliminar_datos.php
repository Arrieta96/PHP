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


// Eliminar registro
$sql = "DELETE FROM empleados WHERE id=10";

if (mysqli_query($conexion, $sql)) {
  echo "Registro eliminado";
} else {
  echo "Error: registro no eliminado: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>