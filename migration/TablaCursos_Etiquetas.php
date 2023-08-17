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

        $sql = "CREATE TABLE curso_etiqueta (
            id INT AUTO_INCREMENT PRIMARY KEY,
            curso_id BIGINT UNSIGNED,
            etiqueta_id BIGINT UNSIGNED,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
            FOREIGN KEY (etiqueta_id) REFERENCES etiquetas(id) ON DELETE CASCADE
        );";

        // Ejecutar la sentencia para crear la tabla
        if ($conn->query($sql) === TRUE) {
            echo "Tabla usuarios creada correctamente.";
        } else {
            echo "Error al crear la tabla usuarios: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>