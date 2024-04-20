<?php

require_once 'PerhitunganLuas.php';
require_once 'PerhitunganVolume.php';

class Kubus implements PerhitunganLuas, PerhitunganVolume {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return 6 * pow($this->sisi, 2);
    }

    public function hitungVolume() {
        return pow($this->sisi, 3);
    }
}

?>
