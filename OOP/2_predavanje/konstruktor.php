<?php

/*
use Automobil as GlobalAutomobil;

class Automobil
{
    public $marka;

    public function vozi()
    {
        echo "Automobil marke $this->marka vozi. \n";
    }
}

$auto = new Automobil();
$auto->marka  = "BMW";
$auto->vozi();
*/

class Automobil
{
    public $marka;

    public function __construct($novaMarka)
    {
        $this->marka = $novaMarka;
        echo "Novi automobil marke $this->marka je stvoren. \n";
    }

    public function __destruct()
    {
        echo "Automobil marke $this->marka je unisten. \n";
    }

    public function vozi()
    {
        echo "Automobil marke $this->marka vozi. \n";
    }
}

$auto = new Automobil("BMW");
$auto->vozi();

unset($auto); //objekt