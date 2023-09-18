<?php

class Database
{
    private $servername;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct($servername, $username, $password, $database)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if($this->conn->connect_error) {
            die("Neuspješna veza s bazom podataka" . $this->conn->connect_error);
        } else {
            echo "Connected!";
        }
    }

    public function close()
    {
        $this->conn->close();
    }
}

$baza = new Database("localhost", "root", "123", "baza");
$baza->connect();

//ovje ćete se igrati za vikend i napisati neki select uvijek za vašu bazu


$baza->close();
