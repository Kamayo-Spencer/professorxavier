<?php
include_once 'connection.php'; // Importing the connection.php for use

// Checking whether the option to delete is a set
if(isset($_GET['deleteheroid'])){

    // Storing the id of delete request on a variable 
    $heroid=$_GET['deleteheroid'];
    // Delete the hero from the database using the hero id and storing the result in a variable
    $sql3 = "DELETE from heroes WHERE Hero_ID= $heroid";
    $result3= mysqli_query($conn, $sql3); // Checking whether the values where deleted(return a boolean value)

    // If the result3 is true we then return the user to the page that has the content deleted from otherwise we raise an error
    if($result3){
        header("location:homepageafterlogin.php");


    }else {
        die("Connection failed: " . $conn->connect_error);

    }




}

?>