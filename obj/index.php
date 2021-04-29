<?php

require __DIR__ .'/Bebras.php';


$zveris1 = new Bebras;
$zveris2 = new Bebras();
$zveris3 = $zveris1;


$zveris3->color = 'blue';
$zveris3->age = 12;
// echo $zveris1->color;
$zveris1->setTail('super long');
$zveris1->sayHello();

echo 'My tail is '. $zveris1->getTail();
// echo 'My tail is '. $zveris1->tail;
echo '<br>';

var_dump($zveris1);
echo '<br>';
var_dump($zveris2);
echo '<br>';
var_dump($zveris3);