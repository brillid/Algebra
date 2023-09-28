<?php

class Brojac
{
    private static $instance;

    private static $broj;

    public function __construct()
    {
        self::$broj++;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function Izracunaj()
    {
        return self::$broj;
    }
}

$brojac1 = Brojac::getInstance();
$brojac2 = Brojac::getInstance();
$brojac3 = Brojac::getInstance();

echo "Broj instanci: " . Brojac::Izracunaj();
