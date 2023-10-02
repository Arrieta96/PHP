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

// Ejemplo de insertar un solo registro
// $sql = "INSERT INTO empleados (nombre, apellidos, email)
//     VALUES('Laurel Mcfadden','Signe Daugherty','mauris.magna.duis@outlook.edu')";

$sql = "INSERT INTO empleados (nombre, apellidos, email)
     VALUES('Jolie Huff','Reece Slater','lectus.justo.eu@yahoo.org')";

$sql = "INSERT INTO empleados (nombre, apellidos, email)
    VALUES('Cleo Rodriguez','Shaeleigh Howard','eu.tempor@yahoo.edu');";

$sql .= "INSERT INTO empleados (nombre, apellidos, email)
    VALUES('Elvis Cruz','Nita Lester','magna.sed.eu@google.net');";

$sql .= "INSERT INTO empleados (nombre, apellidos, email)
    VALUES('Price Montgomery','Ocean England','aenean@outlook.couk')";


// Ejemplo de como definir si solo es un registro
// if (mysqli_query($conexion, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
// }

if (mysqli_multi_query($conexion, $sql)) {
  echo "Datos registrados";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
