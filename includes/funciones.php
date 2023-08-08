<?php

// Mostrar la ruta como echo
function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Uso de caracteres especiales
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Checar que este en la ruta
function pagina_actual($path){
    return str_contains($_SERVER['PATH_INFO'], $path) ? true : false;
}