<?php

/*
Definirajte sučelje "Automobil" s metodama "ubrzaj()" i "koči()". Kreirajte dvije klase
"SportskiAutomobil" i "ObičanAutomobil" koje implementiraju sučelje "Automobil" i definiraju
vlastite implementacije za metode "ubrzaj()" i "koči()". Napravite primjere objekata sportskog
automoibila i običnog automobila, te pozovite njihove metode za ubrzanjei kočenje.
*/

interface Automobil35443
{
    public function ubrzaj();

    public function koci();
}

class SportskiAutomobil implements Automobil35443
{
    public function ubrzaj()
    {
        echo "Sportski automobil ubrzava \n";
    }

    public function koci()
    {
        echo "Sportski automobil koči \n";
    }
}

class ObicanAutomobil implements Automobil35443
{
    public function ubrzaj()
    {
        echo "Običan automobil ubrzava \n";
    }

    public function koci()
    {
        echo "Običan automobil koči \n";
    }

}

$sport = new SportskiAutomobil();
$obican = new ObicanAutomobil();

$sport->ubrzaj();
$sport->koci();
