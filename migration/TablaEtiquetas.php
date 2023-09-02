<?php

class DatabaseTablaEtiquetas{
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
        $tableExistsQuery = "SHOW TABLES LIKE 'etiquetas'";
        $tableExistsResult = $conn->query($tableExistsQuery);

        if ($tableExistsResult->num_rows === 0) {
            $sql = "CREATE TABLE etiquetas (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(255) NOT NULL,
                prefijo VARCHAR(255) NOT NULL);";
            
            // Ejecutar la sentencia para crear la tabla
            if ($conn->query($sql) === TRUE) {
                echo "Tabla etiquetas creada correctamente.";
            } else {
                echo "Error al crear la tabla etiquetas: " . $conn->error;
            }
        } else {
            echo "La tabla ya existe. No se realizaron cambios.";
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>