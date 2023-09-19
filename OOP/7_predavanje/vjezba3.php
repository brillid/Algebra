<?php

/*
Implementirajte imenski prostor "Knjiznica" koji sadrzi klasu "Knjiga"
Stvorite objekt klase "Knjiga" unutar imenskog prostora "Knjiznica" i ispišite informacije o knjizi.
*/

namespace Knjiznica;

class Knjiga1453
{
    private $naslov;

    public function __construct($naslov)
    {
        $this->naslov = $naslov;
    }
}

$knjiga = new \Knjiznica\Knjiga1453("Ime Knjige");
echo $knjiga->$this->naslov;
