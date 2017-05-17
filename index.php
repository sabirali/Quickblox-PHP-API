<?php
include 'quickblox.php';
$tokenAuth = quickAuth();
$quickGetUsers = quickGetUsers($tokenAuth->session->token);
echo "<pre>";
print_r($quickGetUsers);
echo "</pre>";
?>