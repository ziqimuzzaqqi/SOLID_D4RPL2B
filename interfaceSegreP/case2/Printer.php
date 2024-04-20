<?php

require_once 'Cetak.php';

class Printer implements Cetak {
    public function cetakDokumen($dokumen) {
        return "Mencetak dokumen: $dokumen";
    }
}

?>
