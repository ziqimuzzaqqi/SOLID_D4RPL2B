<?php

require_once 'Switchable.php';

class Lampu implements Switchable {
    public function menyala() {
        echo "Lampu dinyalakan.\n";
    }

    public function mati() {
        echo "Lampu dimatikan.\n";
    }
}

?>
