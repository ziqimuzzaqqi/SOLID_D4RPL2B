<?php

require_once 'PembayaranStrategi.php';

class PemilihanPembayaran {
    private $strategiPembayaran;

    public function __construct(PembayaranStrategi $strategiPembayaran)
    {
        $this->strategiPembayaran = $strategiPembayaran;
    }

    public function prosesPembayaran($jumlah)
    {
        $this->strategiPembayaran->bayar($jumlah);
    }
}

?>