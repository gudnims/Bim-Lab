<?php

$conn = mysqli_connect("localhost", "root", "", "bimlab");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>