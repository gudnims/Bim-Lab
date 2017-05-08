<?php

include 'DBconnector.php';

$name = $_POST['name'];
$pwd = $_POST['pwd'];
var_dump($name);
var_dump($pwd);

$sql = "SELECT * FROM user WHERE name='$name' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);
var_dump($result);

if(!$row = $result->fetch_assoc()){
    header('Location: index.php');
}else{
    $_SESSION['id'] = $row[id];
    header('Location: admin.php');
}
?>