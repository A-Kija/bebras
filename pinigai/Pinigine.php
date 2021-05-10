<?php

class Pinigine {

private $popieriniaiPinigai = 0;
private $metaliniaiPinigai = 0;

// --------------------------------------- //

public function ideti($kiekis)
{
    if ( $kiekis > 2) {
        $this->popieriniaiPinigai = $this->popieriniaiPinigai + $kiekis;
    }
    else {
        $this->metaliniaiPinigai = $this->metaliniaiPinigai + $kiekis;
    }

}

public function skaiciuoti()
{
    echo '<br>';
    echo 'Pop: $'.$this->popieriniaiPinigai.' Met: $'.$this->metaliniaiPinigai;
    echo '<br>';
    echo 'Vis: $'.$this->popieriniaiPinigai + $this->metaliniaiPinigai;
    echo '<br>';

}



}