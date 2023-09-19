<?php

/*
Implementirajte klasu "Knjiga" s atributima poput "naslov, "autor" i "godinaIzdanja".
Dodajte metode za postavljanje i dohvaćanje vrijednosti atributa. Stvorite objekt klase
"Knjiga" i ispište informacije o toj knjizi.
*/
class Knjiga
{
    private $naslov;
    private $autor;
    private $godinaIzdanja;

    public function __construct($naslov, $autor, $godinaIzdanja)
    {
        $this->naslov = $naslov;
        $this->autor = $autor;
        $this->godinaIzdanja = $godinaIzdanja;
    }

    public function dohvatiNaslov()
    {
        return $this->naslov;
    }

    public function dohvatiAutor()
    {
        return $this->autor;
    }

    public function dohvatiGodinuIzdanja()
    {
        return $this->godinaIzdanja;
    }
}

$knjiga = new Knjiga("Zlatarevo zlato", "August Šenoa", 1871);
echo $knjiga->dohvatiNaslov() . "\n";
echo $knjiga->dohvatiAutor() . "\n";
echo $knjiga->dohvatiGodinuIzdanja() . "\n";
