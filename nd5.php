<?php


$dvimatisMasyvas = [];

for($i = 0; $i < 10; $i++) {
    // 1 $dvimatisMasyvas[0] 2 $dvimatisMasyvas[1] etc
    $dvimatisMasyvas[$i] = [];
    for($j = 0; $j < 5; $j++) {
        $dvimatisMasyvas[$i][$j] = rand(5, 20);
    }
}

_d($dvimatisMasyvas);

$didesniNei10 = 0;
foreach($dvimatisMasyvas as $mazasMasyvas) {

    foreach ($mazasMasyvas as $value) {
        if ($value > 10) {
            $didesniNei10++;
        }
    }

}

_d($didesniNei10);

$counter = 0;
do {

    for($i = 0; $i < 10; $i++) {
        // 1 $dvimatisMasyvas[0] 2 $dvimatisMasyvas[1] etc
        $dvimatisMasyvas[$i] = [];
        for($j = 0; $j < 5; $j++) {
            $dvimatisMasyvas[$i][$j] = rand(5, 20);
        }
    }

    $counter++;
    $didReiksme = 0;

    foreach($dvimatisMasyvas as $mazasMasyvas) {

        foreach ($mazasMasyvas as $value) {
            if ($value > $didReiksme) {
                $didReiksme = $value;
            }
        }

    }
}
while($didReiksme>19);

_d($didReiksme ,'didReiksme');
_d($counter, 'KIEK KARU');


foreach($dvimatisMasyvas as $key => $mazasMasyvas) {



}


for ($i = 0; $i < 5; $i++) {

    $suma = 0;

    for ($j = 0; $j < 10; $j++) {

        $suma = $suma + $dvimatisMasyvas[$j][$i];

    }

    _d($suma);

}

$letters = range('A','Z');
$didMas = [];
foreach(range(1, 100) as $_1) {
    foreach(range(1, rand(2, 20)) as $_2) {
        shuffle($letters);
        $didMas[$_1][$_2] = $letters[0];
    }
    sort($didMas[$_1]);
}

usort($didMas, function($a, $b){
    
    $bk = (int)str_contains(implode('', $b), 'K');
    $ak = (int)str_contains(implode('', $a), 'K');

    if ($bk + $ak) {
        return $bk <=> $ak;
    }
    
    return count($a) <=> count($b);

});

usort($didMas, function($a, $b){

    $bk = (int)str_contains(implode('', $b), 'K');
    $ak = (int)str_contains(implode('', $a), 'K');

    if ($bk + $ak  == 2) {
        return count($a) <=> count($b);
    }

    return 0;
    

});




_d($didMas);

