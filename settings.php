<?php

include 'DBconnector.php';

$set = $_POST['time'];

$sql = "UPDATE setting SET setting='$set' WHERE id=1";

if(!mysqli_query($conn, $sql)){
    echo "Failed";
}else{
    header("refresh:2; url=admin.php");
}
$conn->close();
exit;
?>
