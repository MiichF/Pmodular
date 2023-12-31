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

        // Verificar si la tabla ya existe
        $tableExistsQuery = "SHOW TABLES LIKE 'cursos_etiquetas'";
        $tableExistsResult = $conn->query($tableExistsQuery);

        if ($tableExistsResult->num_rows === 0) {
            $sql = "CREATE TABLE cursos_etiquetas (
                id INT AUTO_INCREMENT PRIMARY KEY,
                curso_id BIGINT UNSIGNED,
                etiqueta_id BIGINT UNSIGNED,
                creado_el TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                actualizado_el TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
                FOREIGN KEY (etiqueta_id) REFERENCES etiquetas(id) ON DELETE CASCADE
            );";
    
            // Ejecutar la sentencia para crear la tabla
            if ($conn->query($sql) === TRUE) {
                echo "Tabla usuarios creada correctamente.";
            } else {
                echo "Error al crear la tabla cursos_etiquetas: " . $conn->error;
            }
        } else {
            echo "La tabla ya existe. No se realizaron cambios.";
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>