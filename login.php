<?php

session_start();

include 'DBconnector.php';

if(isset($_POST['name']) && isset($_POST['pwd'])){

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    var_dump($name);
    var_dump($pwd);

    $sql = "SELECT * FROM user WHERE 'name' = '{$name}'";
    //var_dump($sql);
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    $res = mysqli_fetch_array($result);
    $cname = $res['name'];
    var_dump($res  ."hello");


    if(!$row = $result->fetch_assoc()){
        echo "Failed";
    }else{
        $_SESSION['id'] = $row['id'];
        header("Location: admin.php");
    }


}
?>