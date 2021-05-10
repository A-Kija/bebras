<?php

require __DIR__ . '/Stikline.php'; // <--- prijungiame klase prie failo

echo '<pre>';

$stikline100 = new Stikline(100);
$stikline150 = new Stikline(150);
$stikline200 = new Stikline(200);

$stikline200->ipilti(88);

$stikline150->ipilti( $stikline200->ispilti() );

$stikline100->ipilti( $stikline150->ispilti() );


var_dump($stikline100);
var_dump($stikline150);
var_dump($stikline200);