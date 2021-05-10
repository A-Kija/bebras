<?php


require __DIR__ . '/Krepsys.php'; // <--- prijungiame klase prie failo
require __DIR__ . '/Grybas.php'; // <--- prijungiame klase prie failo


$krepsys = new Krepsys();


while($krepsys->detiGryba(new Grybas, 500)){};

echo '<pre>';
var_dump($krepsys);