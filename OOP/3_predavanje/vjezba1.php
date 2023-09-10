<?php

/*
Kreirajte apstraktnu klasu "Oblik" s jednim apstraktnom metodom "izracunajPovrsinu()"
Implementirajte dvije podklase: "Krug" i "Pravokutnik", koje nasljeđuju klasu "Oblik" i
implementirajte metodu za izračunavanje površne prema specifičnim formlama za krug i
pravokutnik. Napravite primjere objekata kruga i pravokutnika, te ispišite njihove provrpne.
*/

abstract class Oblik66
{
    abstract public function izracunajPovrsinu();
}

class Krug853 extends Oblik66
{

    private $radijus;

    private $povrsina;

    public function __construct($radijus)
    {
        $this->radijus = $radijus;
    }

    public function izracunajPovrsinu()
    {
        $this->povrsina = pow($this->radijus, 2) * pi();

        return $this->povrsina;
    }
}

class Pravokutnik58903 extends Oblik66
{
    private $duzinaStranice;

    private $duljinaStranice;

    private $povrsina;

    public function __construct($duzinaStranice, $duljinaStranice)
    {
        $this->duzinaStranice = $duzinaStranice;
        $this->duljinaStranice = $duljinaStranice;
    }

    public function izracunajPovrsinu()
    {
        $this->povrsina = $this->duzinaStranice * $this->duljinaStranice;

        return $this->povrsina;
    }
}

$krug = new Krug853(60);
echo $krug->izracunajPovrsinu() . "\n";

$pravokutnik = new Pravokutnik58903(23, 77);
echo $pravokutnik->izracunajPovrsinu() . "\n";
