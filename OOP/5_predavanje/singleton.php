<?php

class Singleton
{
    private static $instance;

    // privatni konstruktor za sprječavanje instanciranja objekta iz glavnog programa ili druge klase
    private function __construct()
    {
        
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function radiNesto()
    {
        //neki postupak
    }
}

$signleton = Singleton::getInstance();
$signleton->radiNesto();

