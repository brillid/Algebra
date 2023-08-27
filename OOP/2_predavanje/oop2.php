<?php

class BankovniRacun
{
    private $vlasnik;
    private $stanje;

    public function postaviVlasnika($vlasnik) //setter (setVlasnik)
    {
        $this->vlasnik = $vlasnik;
    }

    public function dohvatiVlasnika() //getter (getVlasnik)
    {
        return $this->vlasnik;
    }

    public function postaviStanje($stanje) //setter (setStanje)
    {
        $this->stanje = $stanje;
    }

    public function dohvatiStanje() //getter (getStanje)
    {
        return $this->stanje;
    }
}

$racun = new BankovniRacun(); //instanciranje
$racun->postaviVlasnika("Pero Peric");
$racun->postaviStanje("10000");

echo "Vlasnik računa je: " . $racun->dohvatiVlasnika() . "\n";
echo "Stanje računa je: " . $racun->dohvatiStanje() . "\n";

