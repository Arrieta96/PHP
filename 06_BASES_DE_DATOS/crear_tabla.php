<?php

$servername = "127.0.0.1:3366";
$username = "root";
$password = "";
$dbname = "myDB";


// Create connection
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (! $conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "CREATE TABLE empleados (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conexion, $sql)) {
    echo "Table empleados creada";
} else {
    echo "Error de creacion de tabla: " . mysqli_error($conexion);
}



mysqli_close($conexion);
?>