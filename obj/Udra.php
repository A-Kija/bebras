<?php

use Long\Long\Long\River;

class Udra extends River {

    public $name="Šešupė";

    public function __construct()
    {
        parent::__construct();
        echo '<div>ŪDRA CONSTRUCT</div>';
    }
    
    
    public function redRiver()
    {
        River::redRiver();
        echo '<div style="color:blue">'.$this->name.'</div>';
    }

    public function someoneSaysSomething(string $aa) : void
    {
        echo '<div style="color:orange">Aš Ūdra ir nieko nesakau</div>';
    }

}