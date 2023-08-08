<?php

class DatabaseTablaUsuarios{
    // Declaracion de variables
    private $host;
    private $username;
    private $password;
    private $database;

    // Constructor para asignar las variables con lo enviado del seeder
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function createTable() {
        // Conexión a la base de datos
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        $sql = "CREATE TABLE `usuarios` (
            `id` int NOT NULL AUTO_INCREMENT,
            `nombre` varchar(40) DEFAULT NULL,
            `apellido` varchar(40) DEFAULT NULL,
            `email` varchar(40) DEFAULT NULL,
            `password` varchar(60) DEFAULT NULL,
            `confirmado` tinyint(1) DEFAULT NULL,
            `token` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
            `admin` tinyint(1) DEFAULT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        // Ejecutar la sentencia para crear la tabla
        if ($conn->query($sql) === TRUE) {
            echo "Tabla creada correctamente.";
        } else {
            echo "Error al crear la tabla: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>