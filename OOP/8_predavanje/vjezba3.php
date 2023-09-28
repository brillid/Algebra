<?php

use Illuminate\Queue\Connectors\DatabaseConnector;

class DatabaseConnection
{
    private static $instance;
    private $conn;

    private function __construct($dbHost, $dbUsername, $dbPassword, $dbName)
    {
        $this->conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        if ($this->conn->connect_error) {
            die("Neuspjelo spajanje na bazu: " . $this->conn->connect_error);
        }
    }

    public static function getInstance($dbHost, $dbUsername, $dbPassword, $dbName)
    {
        if (!self::$instance) {
            self::$instance = new self($dbHost, $dbUsername, $dbPassword, $dbName);
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123';
$dbName = 'gradska_knjiznica';


$newConnection = DatabaseConnection::getInstance($dbHost, $dbUsername, $dbPassword, $dbName);
$conn = $newConnection->getConnection();

$sqlInsert = "INSERT INTO knjiga (naslov, autor) VALUES ('The art of computer programming', 'Donald Knuth')";
if ($conn->query($sqlInsert) === TRUE) {
    echo "Podaci uspješno umetnuti. \n";
} else {
    echo "Greška prilikom umetanja podataka: " . $conn->error . "\n";
}

$sqlSelect = "SELECT * FROM knjiga";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . ", Naslov: " . $row["naslov"] . ", Autor: " . $row["autor"] . "\n";
    }
} else {
    echo "Nema rezultata.<br>";
}

$conn->close();
