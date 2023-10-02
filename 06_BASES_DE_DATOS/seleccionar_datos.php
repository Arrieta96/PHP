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


// Seleccionar registro
$sql = "SELECT id, nombre, apellidos, email FROM empleados";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {    
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " Apellido: " . $row["apellidos"]. " E-mail: " . $row["email"] . "<br>";
    }
} else {
    echo "0 resultados";
}

mysqli_close($conexion);
?>