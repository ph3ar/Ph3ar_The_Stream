<?php
/**
 * Created by PhpStorm.
 * User: sctrm
 * Date: 1/18/2018
 * Time: 6:47 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PH3AR The Stream!</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="assets/Ph3ar_Logo.png"></a>
        <ul class="navbar-nav float-right ml-auto navbar-collapse">
            <li class="nav-item active">
                <a class="nav-link" href="#">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Start Your Stream</a>
            </li>
        </ul>

    </nav>
    <?php
        require 'config.php';
        $sql = "SELECT streams from streams";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $stream = $row["streams"];

            echo '<div id="twitch-'.$stream.'" class="d-flex justify-content-center">
            <iframe src="https://embed.twitch.tv?channel='.$stream.'&amp;layout=video" allowfullscreen="" scrolling="no" frameborder="0" width="80%" height="480" autoplay=false></iframe>\
            </div>';


        }
    ?>


</body>
</html>