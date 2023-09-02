<?php
    // Incluye el cargador de variables de entorno
    require_once __DIR__ . '/../vendor/autoload.php';

    // Carga las variables de entorno desde .env
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../includes');
    $dotenv->load();
    
    // Obtener los valores de las variables de entorno
    $host = $_ENV['DB_HOST'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASS'];
    $database = $_ENV['DB_NAME'];

    // Incluir los archivos con sentencias SQL
    require 'TablaUsuarios.php';
    require 'TablaEtiquetas.php';

    // Generar las tablas
    //      Tabla de usuarios
    $tableCreatorUsuarios = new DatabaseTablaUsuarios($host, $username, $password, $database);
    $tableCreatorUsuarios->createTable();
    //      Tabla de etiquetas
    $tableCreatorEtiquetas = new DatabaseTablaEtiquetas($host, $username, $password, $database);
    $tableCreatorEtiquetas->createTable();
    

?>