<?php

// $A = 'Bla';
// $B = 'Blu';

// echo "$A---$B";


// echo '<br>';

// echo $A.'---'.$B;


// echo $trecias;


$pirmas = 'antras';

$antras = 'tr';

$tr = '_'.rand(1,2);

$_1 = 'Vienetuks';

$_2 = 'Dvejetuks';


// echo $$$$pirmas;


$pirmas = 'bla bla';
$antras = 'ku kū';

echo '<pre>';

// var_dump($pirmas, $antras);

// var_dump(9 == 9);

// var_dump(2 <=> 1);

// var_dump('bac' <=> 'abc');

$drambliai = 3;
if ($drambliai) {
    echo 'Yra dramblių';
    echo '<br>Valio';
}


$drambliai = 12;
$raganosiai = 12;
if ($drambliai > $raganosiai) {
    echo 'Dramblių yra daugiau';
}
elseif ($drambliai < $raganosiai) {
    echo 'Raganosių yra daugiau';
}
else {
    echo 'Raganosių ir dramblių yra vienodai';
}

$vienas = 2;
$rezultatas = (1 == $vienas) ? 'Yes' : 'No'; // $rezultatas  yra 


// $rezultatas = (1 == $vienas) ? 'Yes' :  ( (1 == $vienas) ? 'No' : 'Alio'); // $rezultatas  yra 


echo '<br>';

var_dump(isset($i)); // gražina FALSE

$i=1;

var_dump(isset($i)); // gražina TRUE
// $i=null;
unset($i);

var_dump(isset($i)); //gražina FALSE

var_dump(null === $i);

echo '<br>';
echo '<br>';
echo '<br>';

$abc = '444';

$rezultatas = $abc ?? 8;

echo $rezultatas;

echo '</pre>';

echo '<br>';
echo '<br>';
echo '<br>';


$epizodas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';


echo $epizodas;

echo '<br>';
echo '<br>';
echo '<br>';

$zodis1 = 'bbc123';
$zodis2 = 'Vilkas pilkas eina namo';
$zodis3 = 'Vilkas pilkas eina namo ';
$zodis4 = 'Vilkas pilkas eina namo ';

echo md5($zodis1);
echo '<br>';
echo md5($zodis2);
echo '<br>';
echo password_hash($zodis3, PASSWORD_DEFAULT);
echo '<br>';
echo password_hash($zodis4, PASSWORD_DEFAULT);














