<?php



$indiskasMasyvas = array('i', 'n'); // nelabai gerai.

$masyvas = ['i', 'mano indeksas' => 'n', 'z']; // kuriamas priskirimu



// A1 ar B2 ar C3?

echo array('A1', 'B2', 'C3')[rand(0, 2)]; // hipsteriskai


echo '<pre>';

print_r($masyvas);

$masyvas[10100000] = 'UU';
$masyvas['stal'] = 'kate';
$masyvas[''] = 'sunis';

$masyvas[1] = 'pele';
$masyvas[''] = 'bebras';

$masyvas[] = 'auto';
$masyvas[] = 'auto';
$masyvas[] = 'auto';
$masyvas[] = 'auto';

$masyvas[null] = 'null';
$masyvas[true] = 'true';
$masyvas[false] = 'false';
$masyvas[35] = -35.7895;
$masyvas['35.4'] = 'kitas';


print_r($masyvas);


foreach($masyvas as $val) {
    echo "<br>$val";
}

$masyvas1['a'] = 'null';
$masyvas1['b'] = 'null';
$masyvas1['c'] = 'null';
$masyvas1[null] = 'null';
$masyvas1[true] = 'true';
$masyvas1[false] = 'false';


echo count($masyvas1);


$A = 'BBB';
$B = &$A;

$A = 'CCC';

$B = 'ZZZ';

echo "<br>$A";
echo "<br>$B";


$color = ['blue', 'red', 'green', 'yellow'];

foreach($color as &$val) {}

foreach($color as $val) {
    echo "<br>$val";
}





