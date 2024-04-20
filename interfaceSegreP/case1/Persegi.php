<?php

require_once 'PerhitunganLuas.php';

class Persegi implements PerhitunganLuas
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuas()
    {
        return pow($this->sisi, 2);
    }
}

?>