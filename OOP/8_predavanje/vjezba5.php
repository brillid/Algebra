<?php

// Povezivanje na bazu
class Knjiga
{
    private $naslov;
    private $autor;

    public function __construct($naslov, $autor)
    {
        $this->naslov = $naslov;
        $this->autor = $autor;
    }

    public function getNaslov()
    {
        return $this->naslov;
    }

    public function getAutor()
    {
        return $this->autor;
    }
}

//iterator sučelje za knjige

interface IteratorKnjiga
{
    public function hasNext();
    public function getNext();

}

//konkretni primjer iteratora za knjige iz baze

class BazaKnjigaIterator implements IteratorKnjiga
{
    private $rezultat;
    private $trenutniRed;

    public function __construct($rezultat)
    {
        $this->rezultat = $rezultat;
        $this->trenutniRed = 0;
    }

    public function hasNext()
    {
        return $this->trenutniRed < $this->rezultat->num_rows; //do sada smo to zvali valid()
    }

    public function getNext()
    {
        $this->rezultat->data_seek($this->trenutniRed);
        $red = $this->rezultat->fetch_assoc();
        $knjiga = new Knjiga($red["naslov"], $red["autor"]);
        $this->trenutniRed++;

        return $knjiga;
    }
}

//kolekcija knjiga iz baze
class BazaKnjiznica implements IteratorKnjiga
{
    private $iterator;
    
    public function __construct($rezultat)
    {
        $this->iterator = new BazaKnjigaIterator($rezultat);
    }

    public function hasNext()
    {
        return $this->iterator->hasNext();
    }

    public function getNext()
    {
        return $this->iterator->getNext();
    }
}

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "gradska_knjiznica";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Greška pri spajanju na bazu: " . $conn->connect_error);
}

// Dohvat knjiga iz baze
$sql = "SELECT naslov, autor FROM knjiga";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $knjiznica = new BazaKnjiznica($result);

    // Korištenje iteratora za obilazak knjiga
    while ($knjiznica->hasNext()) {
        $knjiga = $knjiznica->getNext();
        echo "Knjiga: " . $knjiga->getNaslov() . ", Autor: " . $knjiga->getAutor() . "\n";
    }
} else {
    echo "Nema rezultata.";
}

$conn->close();
