<?php

require_once 'PembayaranStrategi.php';

class PembayaranTunai implements PembayaranStrategi {
    public function bayar($jumlah)
    {
        echo "Melakukan pembayaran sebesar RP " . $jumlah . " secara tunai.\n";
    }
}

?>