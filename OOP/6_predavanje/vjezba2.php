<?php

use NasIterator as GlobalNasIterator;

class NasIterator implements Iterator
{
    private $podaci;
    private $pozicija;
    private $keys;

    public function __construct($podaci)
    {
        $this->podaci = $podaci;
        $this->pozicija = 0;
        $this->keys = array_keys($podaci);
    }

    public function current() //metoda za vračanje trenutnog elementa
    {
        $key = $this->keys[$this->pozicija];
        return $this->podaci[$key];
    }

    public function key()
    {
        return $this->keys[$this->pozicija];
    }

    public function next(): void
    {
        $this->pozicija++;
    }
    
    public function rewind(): void
    {
        $this->pozicija = 0;
    }

    public function valid(): bool
    {
        return isset($this->keys[$this->pozicija]);
    }
}

$podaci['osoba0'] = [
    'ime' => 'Slobodan',
    'dob' => 100,
    'grad' => 'London'
];

$podaci['osoba1'] =
[
    'ime' => 'Ivan',
    'dob' => 100,
    'grad' => 'New York'
];

$podaci['osoba2'] =
[
    'ime' => 'Pero',
    'dob' => 100,
    'grad' => 'Zagreb'
];

$iterator = new NasIterator($podaci);

foreach ($iterator as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            echo "$k: $v";
        }
    } else {
        echo "Vrijednost: $value";
    }
    echo " \n";
}

if ($iterator->valid()) {
    echo "Iterator radi";
} else {
    echo "Iterator ne radi";
}

