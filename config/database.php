<?php
class Database
{
    private $host = "localhost";
    private $db_name = "shop_cart_mysql_1";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
            // throw new Exception($exception->getMessage());
        }
        return $this->conn;
    }

}
