<?php

class Automobil2
{
    //atributi
    public $marka;
    public $boja;

    //metode
    public function vozi()
    {
        echo "Automobil marke $this->marka vozi \n";
    }

    public function svijetli()
    {
        echo "Automobil marke $this->marka svijetli \n";
    }
}

$auto = new Automobil2(); //instanciranje objekta
$auto->marka = "BNW";
$auto->vozi();
$auto->svijetli();
