<?php

/*
Implementirajte try-catch blok prilikom pokušaja iznajmljivanja knjige.
Ako korisnik pokuša iznajmiti nedostupnu knjigu, treba se generirati iznimka:
"NedostupnaKnjigaException" koju ćete uhvatiti i ispisati u odgovarajućem obliku.
*/

class NedostupnaKnjigaException extends Exception
{

}

class Knjiga984
{
    public $dostupna;

    public function iznajmi()
    {
        if(!$this->dostupna) {
            throw new NedostupnaKnjigaException("Knjiga trenutno nije dostupna za posudbu");
        } else {
            echo "Knjiga je uspješno posuđena";
        }
    }
}

$knjiga = new Knjiga984();
$knjiga->dostupna = true;

try {
    $knjiga->iznajmi();
} catch(NedostupnaKnjigaException $e) {
    echo $e->getMessage();
}
