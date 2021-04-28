<?php

define('DIR', __DIR__.'\\');


require_once DIR.'f2.php';

echo 'A';

include_once DIR.'f2.php';


function abra_kadabra()
{
    echo __FUNCTION__;
    echo __FILE__;
    echo __CLASS__;
}

abra_kadabra();