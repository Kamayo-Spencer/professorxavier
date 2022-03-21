<?php
include_once 'connection.php';
$id = $_GET['updateheroid'];


$sqlresults = "SELECT * FROM heroes  WHERE Hero_ID=$id";
$dbresults = mysqli_query($conn, $sqlresults);
$row = mysqli_fetch_assoc($dbresults);
// $heroid = $row['Hero_ID'];
$hero_name = $row['Hero_Name'];
$real_name = $row['Real_Name'];
$short_bio = $row['Short_Bio'];
$long_bio = $row['Long_Bio'];







if (isset($_POST['submit'])) {
   



    $heroname = $_POST['heroname'];
    $realname = $_POST['realname'];
    $shortbio = $_POST['shortbio'];
    $longbio = $_POST['longbio'];
    $sql4 = "UPDATE heroes  SET Hero_ID='$id',Hero_Name='$heroname', Real_Name='$realname', Short_Bio='$shortbio', Long_Bio='$longbio'
    WHERE Hero_ID=$id";
    $result4 = mysqli_query($conn, $sql4);
    if ($result4) {
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
    <title>Update Hero Details </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet.css" rel="StyleSheet">
</head>

<body>

    <div class="main">
        <p class="sign" align="center">Update Hero Details</p>

        <form action="" class="form1" method="POST">
            <input type="text" class="un" align="center" placeholder="Enter the Hero's Name" name='heroname' value="<?php echo $hero_name ?>" required autocomplete="OFF">
            <input type="text" class="un" align="center" placeholder="Enter the Hero's Real Name" name='realname' value="<?php echo $real_name ?>" required autocomplete="OFF">
            <textarea type="text" class="un" align="center" placeholder="Enter the Hero's Short Bio" name='shortbio'  autocomplete="OFF"></textarea>

            <textarea type="text" class="un" align="center" placeholder="Enter the Hero's Long Bio" name='longbio'  autocomplete="OFF"></textarea>
            <input type="submit" align="center" name="submit" value="Update" class="submit" />


        </form>
    </div>


</body>

</html>