<?php

$user = 'root';
$pass = '';
$db = 'BIMLab';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "WTF";

?>