<?php

class Kendaraan {
    protected $jenis;

    public function __construct($jenis) {
        $this->jenis = $jenis;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function start() {
        return "Kendaraan {$this->jenis} dinyalakan. <br>";
    }

    public function stop() {
        return "Kendaraan {$this->jenis} dimatikan. <br>";
    }
}

?>
