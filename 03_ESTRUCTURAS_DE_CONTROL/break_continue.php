<?php

$letters = ['A', 'B', 'C'];
// foreach ($letters as $letter) {
//     if ('B' == $letter) {
//         continue; //"resetea" La ejecucion en la siguiente vuelta
//         echo 'Esto nunca se imprimira';
//     }
//     echo $letter;
// }

foreach ($letters as $letter) {
    if ('B' == $letter) {
        break; // se detien la ejecucion en la siguiente vuelta
        echo 'Esto nunca se imprimira';
    }
    echo $letter;
}

?>