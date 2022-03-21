<?php
include_once 'connection.php';

if(isset($_GET['deleteheroid'])){

    $heroid=$_GET['deleteheroid'];

    $sql3 = "DELETE from heroes WHERE Hero_ID= $heroid";
    $result3= mysqli_query($conn, $sql3);

    if($result3){
        header("location:homepageafterlogin.php");


    }else {
        die("Connection failed: " . $conn->connect_error);

    }




}

?>