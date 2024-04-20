<?php

class User {
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function postUpdate($status)
    {
        return "[$this->nama] memperbarui status: $status";
    }
}

?>