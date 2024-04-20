<?php

require_once 'Switchable.php';

class Kipas implements Switchable {
    public function menyala() {
        echo "Kipas angin dinyalakan.\n";
    }

    public function mati() {
        echo "Kipas angin dimatikan.\n";
    }
}

?>
