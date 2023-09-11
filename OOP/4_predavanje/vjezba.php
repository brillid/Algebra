<?php

/*
Implementirajte program koji pokušava pristupiti neodređenom
svojstvu objekta i izaziva iznimku ako takvo svojstvo ne postoji.
*/
class Objektic
{
}

try {
    $objektic = new Objektic();
    echo $objektic->svojstvo;
} catch (Error $e) {
    echo $e->getMessage();
}
