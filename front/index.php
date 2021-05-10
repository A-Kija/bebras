<?php

define('DURYS', 'Dzin-Dzin');

echo 'Dzin Dzin';

define('INSTALL_URL', '/bebras/front/');



// ROUTING

$path = str_replace(INSTALL_URL, '', $_SERVER['REQUEST_URI']);

if ($path == 'delete') {
    require __DIR__ . '/delete.php';
}

elseif ($path == 'list') {
    require __DIR__ . '/list.php';
}

else {
    echo '404';
}


