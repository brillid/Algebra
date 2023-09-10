<?php

include "config.php";
include "model.php";
// include "Korisnik.php";

public function prikaziDodaniOglas()
{
    $oglas = dodajOglas();
    prikaziOglas($oglas);
}

