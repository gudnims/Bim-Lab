<?php

$conn = mysqli_connect("localhost", "root", "", "BIMLab");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>