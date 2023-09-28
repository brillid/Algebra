<?php

// Sučelje Observer
interface Observer {
    public function update($stanje);
}

// Konkretni observer - EmailNotifikacija
class EmailNotifikacija implements Observer {
    private $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function update($stanje) {
        echo "Slanje email notifikacije na adresu " . $this->email . ": Promjena stanja - " . $stanje . "\n";
    }
}

// Sučelje Subjekt
interface Subjekt {
    public function registrirajObservera(Observer $observer);
    public function obavijestiObservatore($stanje);
}

// Konkretni subjekt - Proizvod
class Proizvod implements Subjekt {
    private $stanje;
    private $observeri;

    public function __construct() {
        $this->observeri = array();
    }

    public function registrirajObservera(Observer $observer) {
        $this->observeri[] = $observer;
    }

    public function obavijestiObservatore($stanje) {
        foreach ($this->observeri as $observer) {
            $observer->update($stanje);
        }
    }

    public function promijeniStanje($stanje) {
        $this->stanje = $stanje;
        $this->obavijestiObservatore($stanje);
    }
}

// Primjer upotrebe
$proizvod = new Proizvod();
$observer1 = new EmailNotifikacija("primjer@primjer.com");
$observer2 = new EmailNotifikacija("test@primjer.com");

// Registriranje observatora
$proizvod->registrirajObservera($observer1);
$proizvod->registrirajObservera($observer2);

// Promjena stanja proizvoda
$proizvod->promijeniStanje("Na skladištu");
