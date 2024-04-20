<?php

require_once 'Persegi.php';
require_once 'Kubus.php';

$persegi = new Persegi(5);
echo "Luas Persegi: " . $persegi->hitungLuas() . "\n";

$kubus = new Kubus(4);
echo "Luas Kubus: " . $kubus->hitungLuas() . "\n";
echo "Volume Kubus: " . $kubus->hitungVolume() . "\n";

?>
