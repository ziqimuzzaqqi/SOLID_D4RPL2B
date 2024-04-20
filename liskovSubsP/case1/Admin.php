<?php

require_once 'User.php';

class Admin extends User
{
    public function deletePost($postId) 
    {
        return "[$this->nama] menghapus postingan dengan ID: $postId";
    }
}

?>