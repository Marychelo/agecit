<?php
Class Connection {
    public $host = "localhost";
    public $database = "presupuestos";
    public $username = "root";
    public $password = "";
    public $port = "3306";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\'');
    protected $conn;

    public function open() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Ocurrió un problema con la conexión: " . $e->getMessage();
        }
    }
    public function close() {
        $this->conn = null;
    }
}
?>
