<?php

$conexion = mysqli_connect('127.0.0.1:3366', 'root', '');
if (!$conexion) {
    die('No se pudo conectar: ' . mysqli_connect_error());
}
echo 'Conexion exitosa';
mysqli_close($conexion);


?>