<?php

/*
Kreirajte imenski prostor "WebShop" koji sadrži dvije klase: "Proizvod" i "Kosarica"
Klasa "Proizvod" treba imati svojstva "naziv" i "cijena", dok klasa "Kosarica treba imati
metode "dodajProizvod()" za dodavanje prozivoda u košaricu i "izracunajUkupanIznos()" koja
će izračunati ukupan iznos svih proizvoda u košarici. U glavnom programu, stvorite nekoliko
objekata klase "Proizvod" i dodajte ih u objekt "Kosarica", a zatim ispišite ukupan
iznos košarice.
*/

namespace WebShop;

class Proizvod
{
    private $naziv;

    private $cijena;

    public function __construct($naziv, $cijena)
    {
        $this->naziv = $naziv;
        $this->cijena = $cijena;
    }

    public function dohvatiCijenu()
    {
        return $this->cijena;
    }
}

class Kosarica
{
    private $proizvodi = [];

    public function dodajProizvod(Proizvod $proizvod)
    {
        $this->proizvodi[] = $proizvod;
    }

    public function izracunajUkupanIznos()
    {
        $ukupno = 0;

        foreach ($this->proizvodi as $proizvod) {
            $ukupno = $ukupno + $proizvod->dohvatiCijenu();
        }

        return $ukupno;
    }
}

use WebShop\Proizvod as WP;

$proizvod1 = new WP("Kruh", 1.1);
$proizvod2 = new WP("Mlijeko", 1.00);


$kosarica = new Kosarica();
$kosarica->dodajProizvod($proizvod1);
$kosarica->dodajProizvod($proizvod2);
echo $kosarica->izracunajUkupanIznos();
//var_dump($kosarica);
