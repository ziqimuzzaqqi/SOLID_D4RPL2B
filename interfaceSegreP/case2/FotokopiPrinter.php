<?php

require_once 'Cetak.php';
require_once 'Fotokopi.php';

class FotokopiPrinter implements Cetak, Fotokopi {
    public function cetakDokumen($dokumen) {
        return "Mencetak dokumen: $dokumen";
    }

    public function fotokopiDokumen($dokumen) {
        return "Membuat fotokopi dokumen: $dokumen";
    }
}

?>
