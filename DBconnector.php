<?php

$conn = mysqli_connect("localhost", "root", "", "bimlab");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM news");
$to_encode = array();

while($row = mysqli_fetch_assoc($result)) {
    $to_encode[] = $row;
};
$json = json_encode($to_encode);
return $json;

?>