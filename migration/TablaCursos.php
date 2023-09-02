<?php

class DatabaseTablaCursos{
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
        $tableExistsQuery = "SHOW TABLES LIKE 'cursos'";
        $tableExistsResult = $conn->query($tableExistsQuery);

        if ($tableExistsResult->num_rows === 0) {
            $sql = "CREATE TABLE `cursos` (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(255) NOT NULL,
                    prefijo VARCHAR(255) NOT NULL,
                    extracto TEXT,
                    cuerpo LONGTEXT,
                    estado ENUM('1', '2') DEFAULT '1',
                    usuario_id BIGINT UNSIGNED,
                    categoria_id BIGINT UNSIGNED,
                    creado_el TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    actualizado_el TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
                    FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE);";

            // Ejecutar la sentencia para crear la tabla
            if ($conn->query($sql) === TRUE) {
                echo "Tabla cursos creada correctamente.";
            } else {
                echo "Error al crear la tabla cursos: " . $conn->error;
            }
        } else {
            echo "La tabla ya existe. No se realizaron cambios.";
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>