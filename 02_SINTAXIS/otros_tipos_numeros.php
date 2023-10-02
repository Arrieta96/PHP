<?php

# Caso 1
// Preguntar si es finito
// $var1 = 24;
// var_dump(is_finite($var1)); # "var_dump" retorna el valor y tipo de variable

# Caso 2
// $var2 = 1.8e956;
// var_dump(is_finite($var2));

# Caso 3
// $variable1 = acos(8);
// var_dump(is_nan($variable1));
// "acos" significa el coseno de "x" numero
// "is_nan" pregunta si es un "NaN: not a number"

# Caso 4
// $nombre = "Gabriela";
// $edad = 24;
// $telefono = "921913725";

// // Preguntar si es numerico
// var_dump(is_numeric($nombre));
// var_dump(is_numeric($edad));
// var_dump(is_numeric($telefono)); # arroja que es un string numerico 

# Caso 5
// castear = cambiar de flotante a entero con "int", "intval"
// Forma 1
// $num = 22.47;
// $int_cast=(int)$num;
// echo $int_cast;

// Forma 2
// $num = 22.47;
// $int_cast = (intval($num));
// echo $int_cast;

// Forma 3
$str = "99.59";
  $str_cast = (int)$str;
  echo $str_cast; 

?>