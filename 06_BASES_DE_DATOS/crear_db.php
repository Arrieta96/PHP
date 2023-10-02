<?php

$conexion = mysqli_connect('127.0.0.1:3366', 'root', '');
if (!$conexion) {
    die('No se pudo conectar: ' . mysqli_connect_error());
}

// Crear una nueva base de datos
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conexion, $sql)) {
    echo "Base de datos creada";
} else {
    echo "Error de creacion " . mysqli_error($conexion);
}

?>


