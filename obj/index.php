<?php

use Zveris\Bebras;
use Ramsey\Uuid\Uuid;

// require __DIR__ .'/Tree.php';
// require __DIR__ .'/Inter.php';
// require __DIR__ .'/Medis.php';
// require __DIR__ .'/River.php';
// require __DIR__ .'/Bebras.php';
// require __DIR__ .'/Udra.php';
// require __DIR__ .'/BebroVaikas.php';


require __DIR__ .'/vendor/autoload.php';

// spl_autoload_register(function ($class) {

//     $prefix = 'Zveris\\';

//     $base_dir = __DIR__ . '/';

//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);

//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {

//     $prefix = '';

//     $base_dir = __DIR__ . '/';

//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);

//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {

//     $prefix = 'Long\\Long\\Long\\';

//     $base_dir = __DIR__ . '/';

//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }
//     $relative_class = substr($class, $len);

//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

//     if (file_exists($file)) {
//         require $file;
//     }
// });



Bebras::sayUUU();

$uuid = Uuid::uuid1();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);


// $zveris1 = Bebras::makeBebras(45);
// $zveris2 = Bebras::makeBebras('black');
$zveris3 = new BebroVaikas;


echo '<br>';echo '<br>';
// echo $zveris1->name;
// echo $zveris2->redRiver();
// echo $zveris3->redRiver();
// echo $zveris2->name;
echo '<br>';echo '<br>';




echo '<pre>';
// var_dump($zveris1);
// var_dump($zveris2);
var_dump($zveris3);
echo '</pre>';


// echo '<br>';echo '<br>';
// echo Bebras::$dam. '<----- dam';
// echo '<br>';echo '<br>';

// $zveris1->callHome();
// $zveris2->callHome();
// $zveris3->callHome();

// echo $zveris1->age;

// $zveris3->color = 'blue';
// $zveris3->age = 12;
// echo $zveris1->color;
// $zveris1->setTail('super long');
// $zveris1->sayHello();

// $zveris1->tail = [];

// echo 'My tail is '. $zveris1->tail;
// echo 'My tail is '. $zveris1->getTail();
// echo 'My tail is '. $zveris1->tail;
// echo '<br>';

// var_dump($zveris1);
// echo '<br>';
// var_dump($zveris2);
// echo '<br>';
// var_dump($zveris3);