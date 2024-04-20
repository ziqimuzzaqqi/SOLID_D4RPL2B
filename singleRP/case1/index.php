<?php

require_once 'Persegi.php';

$persegi = new Persegi();
$persegi->setSisi(5);
echo "Luas persegi dengan sisi 5 adalah : " . $persegi->hitungLuas();

?>