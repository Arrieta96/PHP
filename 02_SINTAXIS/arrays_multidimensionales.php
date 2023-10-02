<?php

// Contienen mas arrays en su interior
 $frutas = array(
    array("Mango", 22, 18),
    array("Sandia", 15, 13),
    array("Naranja", 5, 2),
    array("Fresa", 17, 15)
 );

 echo "Tenemos " .$frutas[0][0]. ": vendidas ".$frutas[0][1]. " y disponibles: ".$frutas[0][2]. ".<br>";
 echo "Tenemos " .$frutas[1][0]. ": vendidas ".$frutas[1][1]. " y disponibles: ".$frutas[1][2]. ".<br>";
 echo "Tenemos " .$frutas[2][0]. ": vendidas ".$frutas[2][1]. " y disponibles: ".$frutas[2][2]. ".<br>";
 echo "Tenemos " .$frutas[3][0]. ": vendidas ".$frutas[3][1]. " y disponibles: ".$frutas[3][2]. ".<br>"; 


?>