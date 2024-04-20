<?php

require_once 'Printer.php';
require_once 'PindaiPrinter.php';
require_once 'FotokopiPrinter.php';

// Contoh penggunaan
$printer = new Printer();
echo $printer->cetakDokumen("Dokumen 1") . "\n";

$pindaiPrinter = new PindaiPrinter();
echo $pindaiPrinter->cetakDokumen("Dokumen 2") . "\n";
echo $pindaiPrinter->pindaiDokumen("Dokumen 2") . "\n";

$fotokopiPrinter = new FotokopiPrinter();
echo $fotokopiPrinter->cetakDokumen("Dokumen 3") . "\n";
echo $fotokopiPrinter->fotokopiDokumen("Dokumen 3") . "\n";

?>
