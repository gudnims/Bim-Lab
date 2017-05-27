<?php

include 'DBconnector.php';

$headline = $_POST['headline'];
$content = $_POST['editor1'];
$pic = $_POST['pic'];

$sql = "INSERT INTO news (pic, headline, content) VALUES ('$pic', '$headline', '$content')";

if(!mysqli_query($conn, $sql)){
    echo "Failed";
}else{
    header("refresh:2; url=admin.php");
}
$conn->close();
exit();
?>