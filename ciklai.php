<?php

// 0 - daug
$sk = rand(0, 10);
while ($sk < 9) {
   echo $sk . '<br>';
   $sk = rand(0, 10);
}

echo '<br>----</br>';


// 1 - daug
do {
    $sk = rand(0, 10);
    echo $sk . '<br>';
} while ($sk < 9);

echo '<br>----</br>';

for ($x = 10; $x <= 17; $x++) {
    echo 'Numeris: '.$x.' <br>';
}

///--> hipsper

_dc(range(1, 5));

foreach(range(1, 3) as $x) {
    echo 'Numeris: '.$x.' <br>';
}

echo 'Numeris: 1 <br>';
echo 'Numeris: 2 <br>';
echo 'Numeris: 3 <br>';


 echo '<br>----</br>';

 for ($a = 1; $a <= 5; $a++) {
    echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
    for ($x = 1; $x <= 5; $x++) {
        switch($x) {
            case 1: echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
            break 3;
            case 2: echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
        }
    }
 }

$masyvas = ['DDD'=>'a', 'c'];

_dc($masyvas);

 foreach($masyvas as $val) {
    echo 'Va kas: '.$val.' <br>';
 }


 foreach($masyvas as $index => $_) {
    echo 'Va kas: ----'.$index.' <br>';
 }
 
 