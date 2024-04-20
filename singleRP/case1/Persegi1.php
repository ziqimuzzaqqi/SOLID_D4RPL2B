<?php

class Persegi1
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