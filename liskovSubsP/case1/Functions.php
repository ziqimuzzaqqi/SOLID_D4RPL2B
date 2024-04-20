<?php

require_once 'User.php';

function gunakanPengguna(User $pengguna, $status)
{
    echo $pengguna->postUpdate($status) . "\n";
}

?>