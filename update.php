<?php
include_once 'connection.php';
if (isset($_POST['submit'])) {

    $heroname = $_POST['heroname'];
    $realname = $_POST['realname'];
    $shortbio = $_POST['shortbio'];
    $longbio = $_POST['longbio'];
    $sql2 = "INSERT INTO heroes (Hero_Name, Real_Name,Short_Bio, Long_Bio) VALUES ('$heroname', '$realname', '$shortbio', '$longbio')";
    $result2=mysqli_query($conn, $sql2);
    if ($result2) {
        echo "Data added successfully.";
        header("location:homepageafterlogin.php");

    } else {
        die("Connection failed: " . $conn->connect_error);

    }

}
// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add New Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet.css" rel="StyleSheet">
</head>

<body>
   
    <div class="main">
    <p class="sign" align="center">Add Hero</p>

    <form action="" class="form1"  method="POST">
            <input type="text" class="un" align="center" placeholder="Enter the Hero's Name" name="heroname" required autocomplete="OFF">
            <input type="text" class="un" align="center" placeholder="Enter the Hero's Real Name" name="realname" required autocomplete="OFF">
            <textarea type="text" class="un" align="center" placeholder="Enter the Hero's Short Bio" name="shortbio" autocomplete="OFF"></textarea>

            <textarea type="text" class="un" align="center" placeholder="Enter the Hero's Long Bio" name="longbio" autocomplete="OFF"></textarea>
            <input type="submit" align="center" name="submit" value="Submit" class="submit"/>   


    </form>
    </div>


</body>

</html>