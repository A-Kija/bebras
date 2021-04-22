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