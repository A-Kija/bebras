<?php


class Stikline {

    private $turis; // plane nezinom koks bus todel === NULL
    private $kiekis = 0;

//------------------------------------//


    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        $kiekis = $this->kiekis + $kiekis; // bendrai yra tiek
        $this->kiekis = min($kiekis, $this->turis);
    }

    public function ispilti()
    {
        $ispilam = $this->kiekis;
        $this->kiekis = 0;
        return $ispilam;
    }

}