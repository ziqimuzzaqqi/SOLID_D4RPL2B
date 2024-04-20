<?php

require_once 'User.php';

class MemberBiasa extends User
{
    public function likePost($postId)
    {
        return "[$this->nama] menyukai postingan dengan ID: $postId";
    }
}

?>