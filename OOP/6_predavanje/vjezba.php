<?php

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

$iterator2 = new NasIterator($podaci);

foreach($iterator2 as $key => $vrijednost) {
    echo "Ključ: $key; Vrijednost = $vrijednost \n";
}

//proba
echo $iterator2->rewind() . "\n";
echo $iterator2->key() . "\n";
echo $iterator2->current() . "\n";
echo $iterator2->next() . "\n";
echo $iterator2->key() . "\n";
echo $iterator2->current() . "\n";
echo $iterator2->next() . "\n";
echo $iterator2->key() . "\n";
echo $iterator2->current() . "\n";
