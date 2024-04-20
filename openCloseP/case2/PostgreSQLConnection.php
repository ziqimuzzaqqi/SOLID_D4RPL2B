<?php

require_once 'DatabaseConnection.php';

class PostgreConnection implements DatabaseConnection {
        public function connect()
        {
            echo "Terhubung ke PostgreSQL.\n <br>";
        }

        public function disconnect()
        {
            echo "Teputus dari PostgreSQL.\n";
        }

        public function query($sql)
        {
            echo "Menjalankan query: $sql di PostgreSQL.\n <br>";
        }
}

?>