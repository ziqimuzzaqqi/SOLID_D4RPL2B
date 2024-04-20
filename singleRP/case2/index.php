<?php 

require_once 'Mahasiswa.php';
require_once 'databaseMahasiswa.php';

$mahasiswa1 = new Mahasiswa('Ahmad Muzzaqqi Alfathu Dzikri', '2205032 <br>');
$mahasiswa2 = new Mahasiswa('Ahmad Zohari', '2205033');

$databaseMahasiswa = new databaseMahasiswa();

$databaseMahasiswa->tambahMahasiswa($mahasiswa1);
$databaseMahasiswa->tambahMahasiswa($mahasiswa2);

echo "Daftar Mahasiswa RPL 2B:\n <br>";
$databaseMahasiswa->tampilkanMahasiswa();