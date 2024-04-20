<?php

class databaseMahasiswa
{
    private $mahasiswas = [];

    public function tambahMahasiswa(Mahasiswa $mahasiswa)
    {
        $this->mahasiswas[] = $mahasiswa;
    }

    public function tampilkanMahasiswa()
    {
        foreach ($this->mahasiswas as $mahasiswa) {
            echo "Nama: " . $mahasiswa->getNama() . ", NIM: " . $mahasiswa->getNim() . "\n";
        }
    }
}

?>