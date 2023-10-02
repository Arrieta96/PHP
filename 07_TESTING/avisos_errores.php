<?php

// // crear conexion
// $conexion = mysqli_connect('127.0.0.1:3366', 'root', 'a');

// //verificar conexion 
// if (!$conexion) {
//     die('No se pudo conectar: ' . mysqli_connect_error());
// }
// echo 'Conexion exitosa';
// mysqli_close($conexion);

function manejaErrores ($errnum, $errstr){
    echo "<b>Error:</b> [$errnum] $errstr<br>";
    echo "Terminando";
    die();
}

// establecer nuestro mensaje de error como predeterminada
set_error_handler("manejaErrores");

// desencadenar el error para probar
echo($test);
?>
