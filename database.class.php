<?php
class Database {
    private $driver;
    private $host;
    private $dbname;
    private $username;
    private $con;

    public function __construct() {
        $this->driver = "mysql";
        $this->host = "localhost";
        $this->dbname = "jjs";
        $this->username = "root";
    }

    public function getConexao() {
        try {
            $this->con = new PDO(
                "$this->driver:host=$this->host;dbname=$this->dbname",
                $this->username
            );
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->con;
        } catch (Exception $e) {
            echo "Erro de conexão: " . $e->getMessage();
            return null;
        }
    }
}
?>