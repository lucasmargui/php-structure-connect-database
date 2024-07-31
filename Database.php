<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'test_db';
    private $username = 'root';
    private $password = '';
    private $conn;

    // Método para conectar ao banco de dados
    public function connect() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Erro de Conexão: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
?>