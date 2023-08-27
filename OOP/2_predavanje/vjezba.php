<?php


/*ZADATAK1:
Kreirajte klasu "Osoba" s privatnim svojstvima "ime i "prezime"
Implementirajte javne metode za postavljanje i dohvacanje tih svojstva*/

class Osoba2
{
    private $ime;
    private $prezime;

    public function postaviIme($ime)
    {
        $this->ime = $ime;
    }

    public function dohvatiIme()
    {
        return $this->ime;
    }

    public function postaviPrezime($prezime)
    {
        $this->prezime = $prezime;
    }

    public function dohvatiPrezime()
    {
        return $this->prezime;
    }
}

$osoba = new Osoba2();
$osoba->postaviIme("Domagoj");
$osoba->postaviPrezime("Brilli");
$osoba->dohvatiIme();
$osoba->dohvatiPrezime();


/*ZADATAK2:
Kreirajte baznu klasu "Oblik" s zasticenim svojstvima "brojStranica" i "boja"
Implementirajte metodu "prikaziDetalje()" koja ispisuje broj stranica i boju*/


class Oblik1
{
    protected $brojStranica;
    protected $boja;

    public function prikaziDetalje()
    {
        echo "Broj stranica je $this->brojStranica \n";
        echo "Boja je $this->boja \n";
    }
}

class Kvadratic extends Oblik1
{
    public function __construct()
    {
        $this->brojStranica = 4;
        $this->boja = "Crvena";
    }
}

$kvadrat = new Kvadratic();
$kvadrat->prikaziDetalje();


/*ZADATAK3:
Kreirajte roditeljsku klasu "Voće" s privatnim svojstvom "naziv" i javnom metodom "ispisiNaziv()"
Kreirajte podklasu "Jabuka" koja nasljeduje klasu "Voće" i dodajte javnu metodu "ispisiPoruku()"
koja koristi privatno svojstvo "naziv"*/

class Voce
{
    protected $naziv;

    public function __construct($naziv)
    {
        $this->naziv = $naziv;
    }

    public function ispisiNaziv()
    {
        echo "Naziv voća je: $this->naziv \n";
    }
}

class Jabuka extends Voce
{
    public function ispisiPoruku()
    {
        echo "Ispisujemo naziv $this->naziv \n";
    }
}

$jabuka = new Jabuka("Granny Smith");
$jabuka->ispisiNaziv();
$jabuka->ispisiPoruku();

/*ZADATAK4:
Kreirajte klasu "Knjiga" s privatnim svojstvima "naslov" i "autor"
Implementirajte javni konstrukor za inicijalizaciju tih svojstava
Implementirajte destruktor koji ce ispisivati poruku prilikom unistavanja objekta */

class Knjiga
{
    private $naslov;
    private $autor;

    public function __construct($naslov, $autor)
    {
        $this->naslov = $naslov;
        $this->autor = $autor;
    }

    public function __destruct()
    {
        echo "Knjiga je uništena. \n";
    }

    public function printaj()
    {
        echo "Naslov: $this->naslov \n";
        echo "Autor $this->autor \n";
    }
}

$knjiga = new Knjiga("BackEnd", "Algebra");
$knjiga->printaj();

/*ZADATAK5:
Napisite klasu "Krug" koja naslijeduje apstraktnu klasu "Oblik"
Implementirajte konstruktor koji prima boju i radijus kruga, te
inicijalizirati svojstva. Implementirajte metode "izracunajPovrsinu()"
i "prikaziDetalje()" kako bi pravilno izracunali povrsinu i ispisali tedalje kruga */

abstract class Oblik2
{
    private $boja;
    private $radijus;

    public function __construct($boja, $radijus)
    {
        $this->boja = $boja;
        $this->radijus = $radijus;
    }
}

class Krug extends Oblik2
{
    public function izracunajPovrsinu()
    {
        $this->radijus * 2 * 3.14;
    }



}
