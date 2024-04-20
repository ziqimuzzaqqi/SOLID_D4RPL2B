<?php

require_once 'TransferBank.php';
require_once 'PembayaranTunai.php';
require_once 'PemilihanPembayaran.php';

$pilihanPembayaran = new PemilihanPembayaran(new TransferBank());
$pilihanPembayaran->prosesPembayaran(1000000);

$pilihanPembayaran = new PemilihanPembayaran(new PembayaranTunai());
$pilihanPembayaran->prosesPembayaran(200000);

?>