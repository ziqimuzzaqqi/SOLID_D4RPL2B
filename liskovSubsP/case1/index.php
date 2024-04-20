<?php

require_once 'User.php';
require_once 'Admin.php';
require_once 'MemberBiasa.php';
require_once 'Functions.php';

$admin = new Admin("Admin01");
$member = new MemberBiasa("Member01");

gunakanPengguna($admin, "Ini adalah status dari admin.");
gunakanPengguna($member, "Ini adalah status dari member.");

echo $admin->deletePost(123) . "\n";
echo $member->likePost(125) . "\n";

?>