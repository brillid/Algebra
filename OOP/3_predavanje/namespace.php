<?php

namespace Geometrija;

class Krug3
{
    public function ispis()
    {
        echo "U imenskom smo prostoru geometrije \n";
    }
}

namespace Matematika;

class Krug3
{
    public function ispis()
    {
        echo "U imenskom smo prostoru matematika \n";
    }
}

use Matematika\Krug3 as M;

$krug = new \Geometrija\Krug3();
$krug = new M();
$krug->ispis();
