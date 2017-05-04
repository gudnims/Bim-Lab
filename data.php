<?php
include 'DBconnector.php';

$result = mysqli_query($conn, "SELECT * FROM news");
$to_encode = array();
while($row = mysqli_fetch_assoc($result)) {
    $to_encode[] = $row;
};
echo json_encode($to_encode);
$conn->close();
?>