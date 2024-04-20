<?php

class Persegi
{
    private $sisi;
    
    public function setSisi($s)
    {
        $this->sisi = $s;
    }

    public function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
}

?>