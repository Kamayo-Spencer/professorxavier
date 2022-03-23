<?php
// Importing the necessary files
include_once 'connection.php';

// Finding out if the information gotten from the user is in a set format
if(isset($_POST["username"])){
	// Storing the user input in respective variables
    $username=$_POST["username"];
    $password=$_POST["password"];
	// searching if the password is in the database
    $sql1 = "SELECT * from users WHERE Username='".$username."' AND Userpassword='".$password."'
    limit 1";

	// Returning true if the query finds that the info given by the user is in the database
    $result1=mysqli_query($conn, $sql1);
	// If the information is in the database, the user is led to an afterlogin page else the user is not authorized to continue to login
    if(mysqli_num_rows($result1)==1){
        echo" You have successfully Logged in";
        header("location:homepageafterlogin.php");

    }else{
        echo"Unauthorized Access";
        exit();
    }


}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="stylesheet.css">

	<title>Login Page</title>
</head>
<body>
	
<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" action="" method="POST">
      <input class="un " type="text" align="center" name="username" placeholder="Enter your Username" required>
      <input class="pass" type="password" align="center" name="password" placeholder="Enter your Password" required>
	  <input type="submit" align="center" name="submit" value="Sign in" class="submit"/>   
                
    </div>
     
	<!-- <div class="container-login">
        <img src='images/loggged.png'/>
		<form action="" method="POST">
			<div class="form_input">
				<input type="text" name="username"  placeholder=" Enter your Username"required>
			</div>
			<div class="form_input">
				<input type="password" placeholder="Enter your Password" name="password" required>
			</div>
			<div>
				<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
			</div> -->
		</form>
	</div>
</body>
</html> 