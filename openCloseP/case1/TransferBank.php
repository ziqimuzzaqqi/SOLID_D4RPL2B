<?php

require_once 'PembayaranStrategi.php';

class TransferBank implements PembayaranStrategi {
    public function bayar($jumlah)
    {
        echo "Melakukan pembayaran sebesar RP " . $jumlah . " dengan tranfer dengan bank.\n <br>";
    }
}

?>