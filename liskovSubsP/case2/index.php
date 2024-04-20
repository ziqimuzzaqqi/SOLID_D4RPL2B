<?php

require_once 'Mobil.php';
require_once 'SepedaMotor.php';
require_once 'functions.php';

$mobil = new Mobil("mobil sedan");
$sepedaMotor = new SepedaMotor("sepeda motor");

gunakanKendaraan($mobil);
gunakanKendaraan($sepedaMotor);

?>
