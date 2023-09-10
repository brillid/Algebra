<?php

class Database
{
    private $host = "localhost";
    private $db = "oop_parcijalni_ispit";
    private $username = "root";
    private $password = "123";
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host = " . $this->host . ";dbname=" . $this->$db_name, $this->username, $this->password);
        }
    }

    $pdo = new PDO("mysql:host = $host; dbname = $db", $user, $pass);

    if ($pdo)
    {
        echo "Uspjeh";
    } else {
        echo "Neuspjeh";
}
}
