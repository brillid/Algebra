<?php

class BedIterator implements Iterator
{
    private $podaci;
    private $pozicija;

    public function __construct($podaci)
    {
        $this->podaci = $podaci;
        $this->pozicija = 0;
    }

    //current
    public function current()
    {
        return $this->podaci[$this->pozicija];
    }

    //key
    public function key()
    {
        return $this->pozicija;
    }

    //next
    public function next(): void
    {
        $this->pozicija++;
    }

    //rewind
    public function rewind(): void
    {
        $this->pozicija = 0;
    }

    //valid
    public function valid(): bool
    {
        return isset($this->podaci[$this->pozicija]);
    }
}

$podaci = [1, 2, 3, 4, 5];
$iterator = new BedIterator($podaci);

foreach($iterator as $kljuc => $vrijednost) {
    echo "Ključ: $kljuc; Vrijednost = $vrijednost \n";
}
