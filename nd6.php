<?php

function h1($text) {
    return "<h1 style=\"display:inline;\">$text</h1>";
}


$laikas = md5(time());

echo $laikas.'<br>';


$laikas = preg_replace_callback('/([\d])([\d]*)/', function($match) {
    _d($match);
    return h1(current($match));
}, $laikas);

echo $laikas;


function howMuchIsTheFish($number) 
{
    static $cache = [];
    if (isset($cache[$number])) {
        _d($number,'USE CACHE');
        return $cache[$number];
    }
    $count = 0;
       for ($i = 2; $i < $number; $i++) {
        $count += $number % $i ? 0 : 1;
    }
    $cache[$number] = $count;
    return $count;
}

_d(howMuchIsTheFish(12), 'howMuchIsTheFish');
_d(howMuchIsTheFish(3), 'howMuchIsTheFish');
_d(howMuchIsTheFish(7), 'howMuchIsTheFish');
_d(howMuchIsTheFish(12), 'howMuchIsTheFish');
_d(howMuchIsTheFish(12), 'howMuchIsTheFish');
_d(howMuchIsTheFish(3), 'howMuchIsTheFish');

// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi,
//  išskyrus paskutinį, elementai yra atsitiktiniai skaičiai
//   nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal
//    tokią pat salygą kaip ir pirmasis masyvas. Viską
//     pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. 


function randomArr()
{
    $howLong = rand(10, 20);
    $array = range(1, $howLong);
    foreach ($array as &$value) {
        $value = rand(0, 10);
    }
    return $array;
}


$howDeep = rand(10, 30) -1;
$bigArray = randomArr();
$bigArray[count($bigArray)-1] = 0;
foreach(range(1, $howDeep) as $_) {
    $nextArray = randomArr();
    $nextArray[count($nextArray)-1] = $bigArray;
    $bigArray = $nextArray;
}



_dc($bigArray);

