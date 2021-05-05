<?php

namespace Long\Long\Long;

class River {
    public $name = 'Volga'; // <---- overwritinta

    public static $h2o = 'vanduo';


    public function __construct()
    {
        echo '<div>RIVER CONSTRUCT</div>';
    }


    public function redRiver()
    {
        $say = '';
        $this->someoneSaysSomething($say);
        echo '<div style="color:orange">'.self::$h2o.'</div>';
        echo '<div style="color:orange">'.static::$h2o.'</div>';
        echo '<div style="color:red">'.$this->name.'</div>';
    }

    



}