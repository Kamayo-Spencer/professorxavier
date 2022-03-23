<?php
/**Importing the necessary files */
include_once 'connection.php';
include_once 'search.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor X Heroes</title>
    <!--Bootstrap CSS  -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet.css" rel="StyleSheet">
</head>

<body>

    <header>

        <!-- <div class="welcome-header">
            <h1 class="text-center"><i>Welcome to Professor X Heroes Page<i></h1>
        </div> -->
        <div class="navbar">
            <a class="navbar-Home" href="index.php" target="_self"><b>Home</b>
                <ion-icon name="home-outline" size="large"></ion-icon>
            </a>
            <a class="navbar-Home" href="login.php" target="_blank"><b>Login</b>
                <ion-icon name="log-in-outline" size="large"></ion-icon>
            </a>

        </div>
    </header>
    <div class="container">
        <!-- <h1 class="text-center">Welcome to Professor X Heroes Page</h1> -->
        <!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
            Add New Heroes
        </button> -->
        <form method="POST" action="search.php">
            <input type="text" name="search" placeholder="Search by Name...">
            <button type="submit" class="btn btn-dark" name="submit-search">Search</button>

        </form>
        <table class="table table-hover">
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
                <?php
                $sql = "SELECT * from heroes";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $hero_id = $row['Hero_ID'];
                        $hero_name = $row['Hero_Name'];
                        $real_name = $row['Real_Name'];
                        $short_bio = $row['Short_Bio'];
                        $long_bio = $row['Long_Bio'];
                        echo '<tr>
      <th scope="row">' . $hero_id . '</th>
      <td>' . $hero_name . '</td>
      <td>' . $real_name . '</td>
      <td>' . $short_bio . '</td>
      <td>' . $long_bio . '</td>

    </tr>';
                    }
                }

                ?>

            </tbody>
        </table>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <footer>
        <div class="footer">
            <!-- <h5>Hosted by Heroku</h5>
            <h6>
                <ion-icon name="call-outline"></ion-icon> +254-743106974
            </h6> -->
            <h6>
            <a>
                <ion-icon name="location-outline"></ion-icon> Somewhere, Kenya
            </a>
            </h6>
        </div>

    </footer>

</body>

</html>