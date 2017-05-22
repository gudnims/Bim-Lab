<?php

include 'DBconnector.php';

$name = $_POST['name'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE name='$name' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if(!$row = $result->fetch_assoc()){
    echo "<script type=\"text/javascript\">window.alert('wrong username or password')</script>";
    header("refresh:0; url=index.php");
}else{
    $_SESSION['id'] = $row[id];
    header('Location: admin.php');
}
$conn->close();
?>