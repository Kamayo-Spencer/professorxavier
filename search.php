<?php

include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <title>Document</title> -->
</head>

<body>
<!--     
<form method="POST" action="search.php">
    <input type="text" name="search" placeholder="Search by Real Name or Hero name">
    <button type="submit" name="submit-search">Search</button>

</form> -->
<div class="container my-3">

    <?php
    // Checking if the user input is a set
    if (isset($_POST["submit-search"])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM heroes  WHERE Hero_Name LIKE  '%$search%' OR Real_Name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        //Finding out if the searched item is available in the database
        // and displaying it to the user if it is available otherwise
        // a not found message is desplayed.
        if ($queryResult == 0) {
            echo "There was no search results";
           
        
        } else {
        $row = mysqli_fetch_assoc($result);
            $hero_id = $row['Hero_ID'];
            $hero_name = $row['Hero_Name'];
            $real_name = $row['Real_Name'];
            $short_bio = $row['Short_Bio'];
            $long_bio = $row['Long_Bio'];
            echo '
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hero ID</th>
                    <th scope="col">Hero Name</th>
                    <th scope="col">Real Name</th>
                    <th scope="col">Short Bio</th>
                    <th scope="col">Long Bio</th>
                </tr>
            </thead>

            <tbody>
           <tr>
    <th scope="row">' . $hero_id . '</th>
    <td>' . $hero_name . '</td>
    <td>' . $real_name . '</td>
    <td>' . $short_bio . '</td>
    <td>' . $long_bio . '</td>
    
    </tr>';
        };
    }

    ?>
    </body>

</html>