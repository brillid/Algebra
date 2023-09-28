<?php

// Podaci za pristup bazi
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123';
$dbName = 'gradska_knjiznica';

// Spajanje na bazu podataka
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Neuspjelo spajanje na bazu: " . $conn->connect_error);
}

// SQL upit za umetanje podataka
$sqlInsert = "INSERT INTO knjiga (naslov, autor) VALUES ('The art of computer programming', 'Donald Knuth')";
if ($conn->query($sqlInsert) === TRUE) {
    echo "Podaci uspješno umetnuti. \n";
} else {
    echo "Greška prilikom umetanja podataka: " . $conn->error . "\n";
}

// SQL upit za dohvaćanje podataka
$sqlSelect = "SELECT * FROM knjiga";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . ", Naslov: " . $row["naslov"] . ", Autor: " . $row["autor"] . "\n";
    }
} else {
    echo "Nema rezultata.<br>";
}

// Zatvaranje veze s bazom podataka
$conn->close();
