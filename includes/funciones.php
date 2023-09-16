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
function pagina_actual($path) : bool{
    return str_contains($_SERVER['PATH_INFO'], $path) ? true : false;
}

//Revisa si esta autenticado
function is_auth() : bool{
    session_start();
    return isset($_SESSION['nombre']) && !empty($_SESSION);

}

//Revisa si es admin
function is_admin() : bool{
    session_start();
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);

}