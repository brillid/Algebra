<?php

/*
//simulacija registracije u sutav
$originalnaLozinka = "lozinka123";

$hashLozinka = password_hash($originalnaLozinka, PASSWORD_DEFAULT);

//ispis hashirane lozinke
echo $hashLozinka;

//sada ide prijava simulacija
$userInput = "lozinka123";

if (password_verify($userInput, $hashLozinka))
{
    echo "\n Uspješna prijava";
} else {
    echo "\n Pogrešna lozinka";
}
*/

/*
$options = ['cost' => 15];

$hashLozinka = password_hash("lozinka123", PASSWORD_DEFAULT, $options);
*/

//testirati kako radi sustav ako dva korisnika imaju istu lozinku
$original1 = "lozinka123";
$original2 = "lozinka123";

//hash
$hash1 = password_hash($original1, PASSWORD_DEFAULT);
$hash2 = password_hash($original2, PASSWORD_DEFAULT);

echo "lozinka 1: $hash1 \n";
echo "lozinka 2: $hash2 \n";

if ($hash1 !== $hash2) {
    echo "Dobro je \n";
} else {
    echo "Ovo se ne smije ispisati \n";
}

if (password_verify($original1, $hash1)) {
    echo "lozinke se podudaraju \n";
} else {
    echo "lozinke se NE podudaraju \n";
}
