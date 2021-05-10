<?php

require __DIR__ . '/Pinigine.php'; // <--- prijungiame klase prie failo


$auksoKapsas = new Pinigine; // sukuriam objekta

$petroPinigine = new Pinigine; // sukuriam objekta

$auksoKapsas->skaiciuoti();


$auksoKapsas->ideti(50);
$auksoKapsas->ideti(50);
$petroPinigine->ideti(0.50);
$petroPinigine->ideti(0.556465465465456);

// echo $auksoKapsas->popieriniaiPinigai;


$auksoKapsas->skaiciuoti();
$petroPinigine->skaiciuoti();