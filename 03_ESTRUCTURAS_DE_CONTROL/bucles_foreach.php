<?php

// $semana = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
// foreach ($semana as $dia) {
//     echo "$dia <br/>";
// }


// Con array asociativo
$capitales = array("Canada" => "Ottawa", "USA" => "Washington D.C",
                    "España" => "Madrid", "Peru" => "Lima");
foreach ($capitales as $clave => $valor) {
    echo "$valor es la capital de $clave. <br/>";
    }

?>