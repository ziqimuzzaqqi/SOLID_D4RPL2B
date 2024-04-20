<?php

interface DatabaseConnection {
    public function connect();
    public function disconnect();
    public function query($sql);
}

?>