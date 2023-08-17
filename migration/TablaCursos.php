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

        $sql = "CREATE TABLE `cursos` (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                prefijo VARCHAR(255) NOT NULL,
                extract TEXT,
                body LONGTEXT,
                status ENUM('1', '2') DEFAULT '1',
                user_id BIGINT UNSIGNED,
                categoria_id BIGINT UNSIGNED,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
                FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE);";

        // Ejecutar la sentencia para crear la tabla
        if ($conn->query($sql) === TRUE) {
            echo "Tabla cursos creada correctamente.";
        } else {
            echo "Error al crear la tabla cursos: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>