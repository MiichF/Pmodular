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
        $tableExistsQuery = "SHOW TABLES LIKE 'bloques'";
        $tableExistsResult = $conn->query($tableExistsQuery);

        if ($tableExistsResult->num_rows === 0) {
            $sql = "CREATE TABLE bloques (
                id INT PRIMARY KEY,
                curso_id INT,
                titulo VARCHAR(255),
                descripcion TEXT,
                contenido VARCHAR(255),
                multimedia VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
                orden INT,
                FOREIGN KEY (curso_id) REFERENCES Cursos(id)
            );";
    
            // Ejecutar la sentencia para crear la tabla
            if ($conn->query($sql) === TRUE) {
                echo "Tabla bloques creada correctamente.";
            } else {
                echo "Error al crear la tabla bloques: " . $conn->error;
            }
        } else {
            echo "La tabla ya existe. No se realizaron cambios.";
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>