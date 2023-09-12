<?php

interface Oblik382425
{
    public function crtaj();
}


class Krug43546 implements Oblik382425
{
    public function crtaj()
    {
        echo "Nacrtan je krug. \n";
    }
}

class Kvadrat095435 implements Oblik382425
{
    public function crtaj()
    {
        echo "Nacrtan je kvadrat.";
    }
}

class OblikFactory
{
    public static function stvoriOblik($lik)
    {
        switch ($lik)
        {
            case "krug": return new Krug43546();
            break;
            case "kvadrat": return new Kvadrat095435();
            break;
            default: return null;
        }
    }
}

$krug = new OblikFactory::stvoriOblik("krug");
$krug->crtaj();
