<?php
include 'DBconnector.php';

$name = $_POST['name'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE name='$name' AND pwd='$pwd'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
    echo "Failed to log in";
}else{
    $_SESSION['id'] = $row['id'];
    header("Location: index.html");
}
$conn->close();
?>