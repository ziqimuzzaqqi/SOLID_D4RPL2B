<?php

require_once 'Kendaraan.php';

function gunakanKendaraan(Kendaraan $kendaraan) {
    echo $kendaraan->start() . "\n";
    echo $kendaraan->stop() . "\n";
}

?>
