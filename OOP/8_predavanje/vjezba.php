<?php

class Brojac
{
    public static $broj = 0;

    public function __construct()
    {
        self::$broj++;
    }
}

$brojac1 = new Brojac();
$brojac2 = new Brojac();
$brojac3 = new Brojac();

echo "Broj instanci: " . Brojac::$broj;
