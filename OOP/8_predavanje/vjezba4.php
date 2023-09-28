<?php

//iterator
class Knjiga
{
    public $naslov;
    public $autor;
    public $godinaIzdanja;

    public function __construct($naslov, $autor, $godinaIzdanja)
    {
        $this->naslov = $naslov;
        $this->autor = $autor;
        $this->godinaIzdanja = $godinaIzdanja;
    }
}

class KolekcijaKnjiga implements Iterator
{
    private $knjige = [];
    private $trenutniKljuc = 0;

    public function dodajKnjigu(Knjiga $knjiga)
    {
        $this->knjige[] = $knjiga;
    }

    public function rewind(): void
    {
        $this->trenutniKljuc = 0;
    }

    public function current()
    {
        return $this->knjige[$this->trenutniKljuc];
    }

    public function key()
    {
        return $this->trenutniKljuc;
    }

    public function next(): void
    {
        $this->trenutniKljuc++;
    }

    public function valid(): bool
    {
        return isset($this->knjige[$this->trenutniKljuc]);
    }
}

$kolekcijaKnjiga = new KolekcijaKnjiga();
$kolekcijaKnjiga->dodajKnjigu(new Knjiga("naslov", "autor", 2020));
$kolekcijaKnjiga->dodajKnjigu(new Knjiga("naslov1", "autor1", 2021));
$kolekcijaKnjiga->dodajKnjigu(new Knjiga("naslov2", "autor2", 2022));

//izravno pozvati metodu rewind()
$kolekcijaKnjiga->rewind(); //iterator se nalazi na početku (na nuli)

while ($kolekcijaKnjiga->valid()) {
    $trenutnaKnjiga = $kolekcijaKnjiga->current();
    $kljuc = $kolekcijaKnjiga->key();

    echo "Knjiga " . ($kljuc + 1) . ":" . $trenutnaKnjiga->naslov . "\n";
    $kolekcijaKnjiga->next();
}
