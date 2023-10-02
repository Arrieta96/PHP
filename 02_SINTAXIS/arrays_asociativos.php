<?php

// Tienen claves con nombres especificos
// Asignar un valor, 1era forma
$edad = array("Jorge"=>"42", "Mario"=>"35", "Lola"=>"56");

// 2da forma
$edad['Jorge'] = "42";
$edad['Mario'] = "35";
$edad['Lola'] = "56";

echo "Lola tiene " . $edad['Lola'] . " años. ";

?>