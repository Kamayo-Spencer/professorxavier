<?php
// Setting up the login details 
$hostname = "localhost";
$username = "root";
$password = "2215";
$db_name = "heroes_information";

// Connecting our php to the database
$conn = new mysqli($hostname,$username,$password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
//   echo "Connected successfully";
?>