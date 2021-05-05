<?php
namespace Zveris;

use Long\Long\Long\River;

class Bebras extends River {

    public $color = 'brown';
    private $tail = 32; //cm;

    public $name = 'Nemunas';

    public static $h2o = 'pienas';

    private static $dam = 'wooden';

    private static $bebroObjektas;

    public static function sayUUU()
    {
        // echo $this->tail;
        echo self::$dam;
        echo '<h1>UUUU</h1>';
    }

    public static function makeBebras($params)
    {
        return self::$bebroObjektas ?? self::$bebroObjektas = new self($params);
    }


    // abstract public function someoneSaysSomething(string $say) : void;



    private function __construct($param)
    {
        
        // $this->name = 'Amazon';

        
        
        echo '<br>DER KONSTRUKTOR<br>';
        if (is_string($param)) {
            $this->defaultColor($param);
        }
        if (is_integer($param)) {
            $this->defaultTail($param);
        }
    }

    public function __destruct()
    {
        echo '<br>BEBRAS MIRE<br>';
    }

    private function defaultColor(string $color)
    {
        echo '<br>DER KONSTRUKTOR COLOR<br>';
        $this->color = $color;
    }

    private function defaultTail(int $tail)
    {
        echo '<br>DER KONSTRUKTOR TAIL<br>';
        $this->tail = $tail;
    }

    public function __get($prop)
    {
        if ('age' == $prop) {
            return $this->BeaverAge();
        }
        
        // daug daug daug tikrinimu
        // return $this->$prop ?? 'nera ir nebus. ate';
    }

    public function __set($prop, $value)
    {
        // daug daug daug tikrinimu
        // $this->$prop = $value;
    }

    private function BeaverAge()
    {
        return rand(5, 25);
    }


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

    public function callHome()
    {
        echo '<br>'.self::$dam.'<br>';
        self::$dam = self::$dam . ' alio';
        self::sayUUU();
    }






}