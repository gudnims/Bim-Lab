<?php

$user = 'root';
$pass = '';
$db = 'BIMLab';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");



$result = mysqli_query($db, "SELECT * FROM news");
$to_encode = array();
while($row = mysqli_fetch_assoc($result)) {
    $to_encode[] = $row;
};
echo json_encode($to_encode);
$db->close();
?>