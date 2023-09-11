<?php

/*
Definirajte varijablu $brojTelefona koja sadrži broj telefona.
Koristite funkciju filter_var() s filterom FILTER_XXXX_XXXX_XXXX
kako biste uklonili sve znakove osim brojeva iz unosa. Rezultat
filtriranja spremiti u varijablu $filtriraniBroj.
*/

$brojTelefona = "abcabc";

try
{
    $filtriraniBroj = filter_var($brojTelefona, FILTER_SANITIZE_NUMBER_INT);
    if (!($filtriraniBroj == false) && strlen((strval($filtriraniBroj)) <= 6)){
        throw new Exception("Broj telefona nije ispravan");
    } else {
        echo "Broj telefona je ispravan";
    }
}

catch (Exception $e)
{
    echo $e->getMessage();
}