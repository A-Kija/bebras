<?php

$burbulas = 999;

function funkcijos_vardas($param1 = 0, $param2 = 0, $b = 0)
{
    // return 'aaa';
    // return $param1 + $param2 + $b;
}


$arg1 = 2;
$arg2 = 3;

// var_dump(
//     funkcijos_vardas()
// );

function vidurkis($vienetas, $dvejetas, ...$skaiciai)
{
   $sudetis = 0;
//    _dc($skaiciai);
   foreach ($skaiciai as $val)
    {
        $sudetis += $val;
    }
 $vidurkis = $sudetis / count($skaiciai);
 return $vidurkis;
}
// echo vidurkis(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);


function foo() {
    static $index = 0;
    $index++;
    echo "$index<br>";
}

// foo();
// foo();
// foo();
// foo();


function recursive($num){
    echo $num, '<br>';
    
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        recursive($num + 1);
    }

    echo '<br>PABAIGA '.$num;
    return;
}
$startNum = 1;
// recursive($startNum);

$cb = function ($a, $b){
    echo 'lalal<br>';
    return $a[0] <=> $b[0];
};

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];
// usort($masyvas, $cb);

// _dc($masyvas);





$anonimas = function($what) {
    echo $what;
};

// $anonimas('Hi');



$result = 0;

$one = function()
    { 
        var_dump($result); 
    };
 
$two = function() use ($result)
    { 
        var_dump($result); 
    };
 
$three = function() use (&$result)
    { 
        var_dump($result); 
    };

    
    $three();    // int(1)  
    echo '<br>';
$result++;
 
// $one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
echo '<br>';
$three();    // int(1)



$func = function ($p1,$p2) use (&$func, $glob1, $glob2, $isorinisScoupas) { 
    static $current = 10; 
     
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
     
    // spausdinam reikšmę.
    echo "$current<br>"; 
     
    $current--; 
     
    $func(); 
 }; 

  //  Kviečiam funkciją
 $func();
 








