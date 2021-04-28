<?php

$kas = 'Barsukas ir Meškėnas su Vovere';

$fileName = 'kas.txt';


// $masyvas = range('A', 'X');

// $masyvas_kaip_stringas = json_encode($masyvas);

// file_put_contents('db.json', $masyvas_kaip_stringas);

$masyvas_kaip_stringas = file_get_contents('db.json');

$masyvas = json_decode($masyvas_kaip_stringas);


print_r($masyvas);




file_put_contents($fileName, $kas);


echo file_get_contents($fileName);