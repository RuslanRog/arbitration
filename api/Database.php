<?php

// API SERVER SIDE DATABADE

class Database
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        // Private constructor to prevent direct instantiation
        $host = "localhost";
        $dbName = "arbitration_task";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=$host;dbname=$dbName";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $this->connection = new PDO($dsn, $username, $password, $options);
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

?>