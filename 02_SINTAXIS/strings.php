<?php

// echo 'hola caracola
// hoy es un muy bonito dia';

# Colocar comillas dobles
// echo 'hola caracola hoy es un muy "bonito dia" para caminar.'

# Colocar "\" para que permita apostrofes 
// echo 'hola caracola, I\'m going to the park'

# Colocar "\" para tener otra barra invertida
// echo 'el progrma esta en C:\\Programs\\Users\\Programa'

// EJEMPLOS *************************************************

$mi_string = "maricarmen apellido";
// Saber la longitud en cantida de caracteres
// echo strlen($mi_string);

// Saber el numero de palabras separados por un espacio 
// echo str_word_count($mi_string);

// Invertir el string
// echo strrev($mi_string);

// Buscar un grupo de caracteres
// echo strpos($mi_string, "maricarmen");

// Reemplazar una string con otro string
echo str_replace("apellido", "Perez", $mi_string);

?>