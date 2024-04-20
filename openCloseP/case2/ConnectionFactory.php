<?php

require_once 'MySQLConnection.php';
require_once 'PostgreSQLConnection.php';

class ConnectionFactory {
    public static function createConnection($type) {
        if ($type == 'mysql') {
            return new MySQLConnection();
        } elseif ($type =='postgresql') {
            return new PostgreConnection();
        }
    }
}