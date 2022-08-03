<?php
// используем для подключения к базе данных MySQL
class Database {

    // учетные данные базы данных
    private $host = "127.0.0.1";
    private $db_name = "map_mp";
    private $username = "root";
    private $password = "dental1007";
    public $conn;

    // получаем соединение с базой данных
    public function getConnection() {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>