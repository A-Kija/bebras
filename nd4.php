<?php

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$masyvas = [];

for ($index = 0; $index <= 29; $index++) {
    $masyvas[$index] = rand(5, 25);
}

_d($masyvas, '1uzd');

// Rodykles
$transport = ['foot', 'bike', 'car', 'plane'];

$mode = current($transport); // $mode = 'foot';
_d($mode);
$mode = next($transport);    // $mode = 'bike';
_d($mode);
$mode = current($transport); // $mode = 'bike';
_d($mode);
$mode = prev($transport);    // $mode = 'foot';
_d($mode);
$mode = end($transport);     // $mode = 'plane';
_d($mode);
$mode = next($transport);    // pabaiga;
_d($mode);

// $mode = current($transport); // $mode = 'plane';
// _d($mode);
// $mode = reset($transport);
// _d($mode);




// 2a Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

$didesniNei10 = 0;
foreach ($masyvas as $value) {
    if ($value > 10) {
        $didesniNei10++;
    }
}
_d($didesniNei10 ,'didesniNei10' );

// 2b Raskite didžiausią masyvo reikšmę;

$didReiksme = PHP_FLOAT_MIN;
_d($didReiksme ,'didReiksme');
foreach ($masyvas as $value) {
    if ($value > $didReiksme) {
        $didReiksme = $value;
    }
}

_d($didReiksme ,'didReiksme');


// 3b Suskaičiuokite visų reikšmių sumą;

$suma = 0;
foreach ($masyvas as $value) {
    $suma = $suma + $value;
}

_d($suma, 'SUMA');


foreach ($masyvas as $key => &$value) {
    if ($key%2 === 0 && $value > 15) {
        $value = 0;
        // $masyvas[$key] = 0;
    }
}

_d($masyvas, 'masyvas');






