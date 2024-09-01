<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_hub";

    // Create connection
    $link = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully"."</br>";
?>
