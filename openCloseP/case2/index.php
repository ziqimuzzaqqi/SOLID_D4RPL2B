<?php

require_once 'ConnectionFactory.php';

$databaseType = 'mysql';
$connection = ConnectionFactory::createConnection($databaseType);
$connection->connect();
$result = $connection->query("SELECT * FROM table_name");

$connection->disconnect();

?>