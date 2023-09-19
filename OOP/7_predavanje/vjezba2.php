<?php

/*
Implementirajte apstraktnu klasu "Medij" s atributom "naslov" (protected) i apstraktnom
metodom "prikaziDetalje()". Izvedite klasu "Knjiga" koja nasljeđuje klasu "Medij"
Implementirajte metodu "prikaziDetalje()" koja će ispisati detalje o knjizi.
Koristite konstruktor i destruktor za inicijalizaciju i oslobađanje resursa.
*/

abstract class Medij
{
    protected $naslov;

    abstract public function prikaziDetalje();
}

class Knjiga324 extends Medij
{
    public function __construct($naslov)
    {
        $this->naslov = $naslov;
    }

    public function prikaziDetalje()
    {
        return $this->naslov;
    }

    public function __destruct()
    {
        echo "Objekt je uništen";
    }
}

$knjiga = new Knjiga324("Pipi duga čarapa");
echo $knjiga->prikaziDetalje() . "\n";
unset($knjiga);
