<?php

/*
Kreirajte imenski prostor "Banka" koji sadrži dvije klase: "Racun" i "Transakcija"
Klasa "Racun" treba imati metodu "prikaziStanje()" koja će ispisati stanje računa, dok
klasa "Transakcija" treba imati metodu "izvrsiTransakciju()" koja simulira izvršenje
transakcije. U glavnom programu, instancirajte objekt klase "Racun" i objekt klase
"Transakcija" te iskoristiti njihove metode.
*/

namespace Banka;

class Racun
{
    private $stanjeRacuna;

    public function __construct($stanjeRacuna)
    {
        $this->stanjeRacuna = $stanjeRacuna;
    }

    public function prikaziStanje()
    {
        echo "Stanje računa: $this->stanjeRacuna" . "\n";
    }
}

namespace Banka;

class Transakcija
{
    private $iznos;

    public function __construct($iznos)
    {
        $this->iznos = $iznos;
    }

    public function izvrsiTransakciju()
    {
        echo "Isplaćeno je: $this->iznos" . "\n";
    }
}

use Banka\Racun;

$racun = new Racun(500);
$racun->prikaziStanje();

$transakcija = new Transakcija(20);
$transakcija->izvrsiTransakciju();
