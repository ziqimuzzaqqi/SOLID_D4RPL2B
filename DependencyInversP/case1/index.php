<?php

require_once 'Lampu.php';
require_once 'Kipas.php';
require_once 'Switch.php';


$lampu = new Lampu();
$lampuSwitch = new Switch($lampu);

$lampuSwitch->menyala(); // Output: Lampu dinyalakan.
$lampuSwitch->mati(); // Output: Lampu dimatikan.

// Contoh penggunaan untuk kipas angin
$kipas = new Kipas();
$kipasSwitch = new Switch($kipas);

$kipasSwitch->menyala(); // Output: Kipas angin dinyalakan.
$kipasSwitch->mati(); // Output: Kipas angin dimatikan.

?>
