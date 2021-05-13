<?php
use App\Controllers\DeleteController;
use App\Controllers\ListController;

use App\Controllers\BankController;


define('INSTALL_URL', '/bebras/mvc/');
define('DIR', __DIR__.'/');


require __DIR__ . '/vendor/autoload.php';







// ROUTING

$path = str_replace(INSTALL_URL, '', $_SERVER['REQUEST_URI']);

$path = explode('/', $path);




if ($path[0] == 'delete') {

    if ($path[1] == 'id') {
        return (new DeleteController)->byId($path[2] ?? null);
    }


    if ($path[1] == 'name') {
        return (new DeleteController)->byName($path[2] ?? null);
    }

    
    
}

elseif ($path[0] == 'sarasas') {
    return new ListController;
}


elseif ($path[0] == 'bank') {

    if ($path[1] == 'add') {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return (new BankController)->add($path[2] ?? 0);
        }
        else {
            return (new BankController)->showAdd($path[2] ?? 0);
        }


    }


}



else {
    echo '404';
}


