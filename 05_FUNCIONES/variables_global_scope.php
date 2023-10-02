<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
# Caso 1
// $x = 5; // global scope

// function prueba(){
//     echo "<p>El valor de x dentro de la funcion es: $x</p>";//error
// }
// prueba();

// echo "<p>El valor de x fuera de la funcion es: $x</p>";

# Caso 2
// $x = 10; // global scope

// function prueba(){
//     global $x;
//     echo "<p>El valor de x dentro de la funcion es: $x</p>";//error
// }
// prueba();

// echo "<p>El valor de x fuera de la funcion es: $x</p>";

# Caso 3
function prueba(){
    static $a = 0;
    echo $a;
    $a++;
}

prueba();
echo "<br>";
prueba();
echo "<br>";
prueba();


// Para poder incrementar el valor en cada llamada debemos guardar el
// evalor de a desde dentro de la funcion
?>
</body>
</html>