<?php

require_once 'Cetak.php';
require_once 'Pindai.php';

class PindaiPrinter implements Cetak, Pindai {
    public function cetakDokumen($dokumen) {
        return "Mencetak dokumen: $dokumen";
    }

    public function pindaiDokumen($dokumen) {
        return "Memindai dokumen: $dokumen";
    }
}

?>
