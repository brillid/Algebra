<?php


class Osoba
{
    //metoda
    public function pozdrav()
    {
        echo "Hello World";
    }
}

//instanciranje objekta
$osoba = new Osoba();
$osoba->pozdrav();



//ZADATAK: izračunajmo prosjek ocjena
$ocjene = [4, 5, 3, 5, 4];

//proceduralno

//moj pristup
$prosjekOcjena = array_sum($ocjene) / count($ocjene);

//pristup predavača
$brojOcjena = count($ocjene);
$suma = array_sum($ocjene);
$prosjek = $suma / $brojOcjena;
echo "Prosjek ocjena: " . $prosjek . "\n";


//objektno orijentirano
class Ocjene
{
    public $ocjene;

    public function prosjek()
    {
        $brojOcjena = count($this->ocjene);
        $suma = array_sum($this->ocjene);
        $prosjek = $suma / $brojOcjena;

        return $prosjek;
    }
}

$ocjene = new Ocjene();
$ocjene->ocjene = [1, 2, 3, 4, 5];
$prosjek = $ocjene->prosjek();
echo "Prosjek ocjena: " . $prosjek . "\n";



//ZADATAK: pretvorimo binarni broj u dekadski
$binarni = "100";
$dekadski = bindec($binarni);
echo "Dekadski broj je: " . $dekadski . "\n";


//oop
class Pretvorimo
{
    public $broj;

    public function pretvoriuDekadski()
    {
        $dekadski = bindec($this->broj);

        return $dekadski;
    }
}

$binarni = "100";
$broj = new Pretvorimo();
$broj->broj = $binarni;
$dekadski = $broj->pretvoriuDekadski();
echo "Pretvorba: " . $dekadski . "\n";


//ZADATAK: prebrojimo samoglasnike u string

//proceduralno
$string = "danas je ponedjeljak";
$samoglasnici = ['a', 'e', 'i', 'o', 'u'];
$brojSamoglasnika = 0;

for ($i = 0; $i < strlen($string); $i++) {
    $znak = strtolower($string[$i]);

    if (in_array($znak, $samoglasnici)) {
        $brojSamoglasnika++;
    }
}

echo "Broj samoglasnika: " . $brojSamoglasnika . "\n";


//OOP
class Samoglasnici
{
    public $string;

    public function prebrojiSamoglasnike()
    {
        $samoglasnici = ['a', 'e', 'i', 'o', 'u'];
        $brojSamoglasnika = 0;
        $string = strtolower($this->string);

        for ($i = 0; $i < strlen($string); $i++) {
            $znak = $string[$i];

            if (in_array($znak, $samoglasnici)) {
                $brojSamoglasnika++;
            }
        }

        return $brojSamoglasnika;
    }
}

$string = "Danas je ponedjeljak";
$objekt = new Samoglasnici();
$objekt->string = $string; //objekt->string = "Danas je ponedjeljak";
$brojSamoglasnika = $objekt->prebrojiSamoglasnike();
echo $brojSamoglasnika . "\n";
