<?php

require_once 'Switchable.php';

class Switch {
    private $device;

    public function __construct(Switchable $device) {
        $this->device = $device;
    }

    public function menyala() {
        $this->device->menyala();
    }

    public function mati() {
        $this->device->mati();
    }
}

?>
