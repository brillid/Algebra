<?php

//apstrakcija

abstract class Oblik
{
    abstract public function izracunajPovrsinu();
}

class Kvadrad extends Oblik
{
    private $duzinaStranice;

    public function __construct($duzinaStranice)
    {
        $this->duzinaStranice = $duzinaStranice;
    }

    public function izracunajPovrsinu()
    {
        return $this->duzinaStranice * $this->duzinaStranice;  
    }
}

$k = new Kvadrad(5);
echo "Povrsina je " . $k->izracunajPovrsinu() . "\n";


//enkapsulacija
//oop2.php file setteri i getteri sa privatnim atributima

//nasljeđivanje
class Vozilo
{
    protected $brzina;

    public function ubrzaj($vrijednost)
    {
        $this->brzina+=$vrijednost;
    }
}

class Automobil1 extends Vozilo
{
    public function ispisiBrzinu()
    {
        echo "Brzina automobila je $this->brzina \n";
    }
}

$auto = new Automobil1();
$auto->ubrzaj(30);
$auto->ispisiBrzinu();

