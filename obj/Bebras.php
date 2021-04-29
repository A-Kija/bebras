<?php

class Bebras {
    public $color = 'brown';
    private $tail = 'long';




    public function sayHello()
    {
        echo '<br>I am der Bebr<br>';
    }


    public function getTail()
    {
        return $this->tail;
    }


    public function setTail($tail)
    {
        if ($tail != 'long' && $tail != 'super long') {
            return;
        }
        
        $this->tail = $tail;
    }






}