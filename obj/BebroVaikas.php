<?php

use Zveris\Bebras;


class BebroVaikas extends Bebras implements Inter {

use Tree;

public function __construct(){
    // echo self::LABAS;

    $this->eatTree();

}

public function someoneSaysSomething($fff) : void
{
    echo '<div style="color:orange">Aš Bebras ir sakau Mūūū</div>';
}

}