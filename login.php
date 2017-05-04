<?php

if(isset($_POST['name']) && isset($_POST['pwd'])){

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];

    $conn = mysqli_connect('localhost', 'root', '', 'bimlab');

    $data = mysqli_query($conn, "SELECT * FROM users WHERE 'name' = '{$name}' AND 'pwd' = '{$pwd}'");

    if(!$data == 1){

        $id = $data['id'];
        session_start();
        $_SESSION['id'] = $id;
        echo "success";
    }else{
        echo "failed";
    }
    exit();

}
?>