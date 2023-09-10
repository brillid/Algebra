<?php

/*
Kreirajte imenski prostor "Tvrtka" koji sadrži dvije klase: "Zaposlenik" i "Odjel"
Klasa "Zaposlenik" treba imati svojstva "ime", "prezime" i "placa, te metodu "prikaziDetalje()"
koja će ispisati detalje zaposlenika. Klasa "Odjel" treba imati svojstva "naziv" i "zaposlenici",
te metode "dodajZaposlenika()" za dodavanje zaposlenika u odjel i "prikaziDetalje()" koja će
ispisati detalje odjela, uključujući sve zaposlenike u odjelu. U glavnom programu, stvorite nekoliko objekata
klase "Zaposlenik", stvorite objekt klase "Odjel", dodajte zaposlenike u odjel i ispišite detalje odjela.
*/

namespace Tvrtka;

class Zaposlenik
{
    private $ime;
    private $prezime;
    private $placa;

    public function __construct($ime, $prezime, $placa)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->placa = $placa;
    }

    public function prikaziDetalje()
    {
        echo "Djelatnik: $this->ime $this->prezime ima plaću: $this->placa \n";
    }
}

class Odjel
{
    private $naziv;
    private $zaposlenici = [];

    public function __construct($naziv)
    {
        $this->naziv = $naziv;
    }

    public function dodajZaposlenika(Zaposlenik $zaposlenik)
    {
        $this->zaposlenici[] = $zaposlenik;
    }

    public function prikaziDetalje()
    {
        echo "Naziv odjela: $this->naziv, zaposlenici: \n";

        foreach ($this->zaposlenici as $zaposlenik) {
            $zaposlenik->prikaziDetalje();
        }
    }
}

use Tvrtka\Zaposlenik as Z;
use Tvrtka\Odjel as O;

$zaposlenik1 = new Z("Pero", "Ždero", 1000);
$zaposlenik2 = new Z("Ivan", "Horvat", 1200);

$odjel = new O("Ured");
$odjel->dodajZaposlenika($zaposlenik1);
$odjel->dodajZaposlenika($zaposlenik2);
$odjel->prikaziDetalje();
