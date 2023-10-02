
<!-- // 1. nombre de la funcion
// 2. sentencia a ejecturar
// 3. llamar a la funcion

// Ejemplo 1
// function dibujito(){
//     echo "<(^-^<) ^(^-^)^ (>^-^)>";
// }

// dibujito(); -->

<!DOCTYPE html>
<html lang="en">
<body>
    
<?php

function exponente(int $a, int $b){
    $exp = $a ** $b;
    return $exp;
}

echo "2^3 = " . exponente(2,3) . "<br>";
echo "9^0 = " . exponente(9,0) . "<br>";
echo "5^1 = " . exponente(5,1);

?>

</body>
</html>



