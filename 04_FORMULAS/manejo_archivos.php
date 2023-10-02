<?php

    $miarchivo = fopen("archivo.txt", 'r')
        or die ("No se puede abrir");       

    echo fread($miarchivo, filesize("archivo.txt"));
    fclose($miarchivo);

// 'r' : readonly
// 'w' : write
// 'fread' : lee los datos de un archivo previamente abierto con 'fopen'


?>