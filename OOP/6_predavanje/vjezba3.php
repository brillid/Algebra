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

$podaci = [
    'ime' => 'Slobodan',
    'dob' => 100,
    'grad' => 'London'
];

$iterator = new NasIterator($podaci);

echo "Nakon rewind \n";
$iterator->rewind();
foreach ($iterator as $key => $value) {
    echo "Ključ: $key; Vrijednost: $value \n";
}

echo "Nakon next \n";
$iterator->next();
foreach ($iterator as $key => $value) {
    echo "Ključ: $key; Vrijednost: $value \n";
}

echo "Nakon  valid \n";
$iterator->next();
foreach ($iterator as $key => $value) {
    echo "Ključ: $key; Vrijednost: $value \n";
}
