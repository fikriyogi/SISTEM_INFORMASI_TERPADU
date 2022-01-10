<?php
class Database {

    private $host 		= DB_HOST;
    private $db_name 	= DB_DATABASE;
    private $username 	= DB_USERNAME;
    private $password 	= DB_PASSWORD;
    public 	$conn;

    public function dbConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

    public function app_config($limit_pass_error)
    {
            $stmt = $this->conn->prepare("SELECT * FROM tb_setting");
            $stmt->execute();
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            // return $stmt;
     
    }

}
