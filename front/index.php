<?php

define('DURYS', 'Dzin-Dzin');
define('INSTALL_URL', '/bebras/front/');

echo 'Dzin Dzin';





// ROUTING

$path = str_replace(INSTALL_URL, '', $_SERVER['REQUEST_URI']);

$path = explode('/', $path);


if ($path[0] == 'delete') {
    $id = $path[1];
    require __DIR__ . '/delete.php';
}

elseif ($path[0] == 'sarasas') {
    $listas = $path[1];
    require __DIR__ . '/list.php';
    
}

else {
    echo '404';
}


