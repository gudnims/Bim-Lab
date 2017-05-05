<?php

include 'DBconnector.php';

$headline = $_POST['headline'];
$content = $_POST['editor1'];

$sql = "INSERT INTO news (headline, content) VALUES ('$headline', '$content')";

if(!mysqli_query($conn, $sql)){
    echo "Failed";
}else{
    header("refresh:2; url=admin.php");
}
?>