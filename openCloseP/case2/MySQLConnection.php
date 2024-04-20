<?php

require_once 'DatabaseConnection.php';

class MySQLConnection implements DatabaseConnection {
        public function connect()
        {
            echo "Terhubung ke MySQL.\n <br>";
        }

        public function disconnect()
        {
            echo "Teputus dari MySQL.\n";
        }

        public function query($sql)
        {
            echo "Menjalankan query: $sql di MySQL.\n <br>";
        }
}

?>