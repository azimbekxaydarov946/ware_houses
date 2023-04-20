<?php
class DB_Connection {
    protected $host;
    protected $username;
    protected $password;
    protected $database;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    public function create_database() {
        $connection = new mysqli($this->host, $this->username, $this->password);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        $sql="CREATE DATABASE IF NOT EXISTS `$this->database`";
        $connection->query($sql);
        return $connection;
    }
    public function connect() {
        
        $create_db=$this->create_database();
        if ($create_db->connect_error) {
            die("Database not created: " . $create_db->connect_error);
        }

        $conn= new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

}
