<?php
    include "db.php";
    
    $sql = "select * from products where id = 1;";
    $result = mysqli_query($link, $sql);
    // Fetch the result data
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $subtitle = $row["subtitle"];
            $price = $row["price"];
            $description = $row["description"];
            $benefits = preg_split("/\r\n|\n|\r/", $row["benefits"]);
            $details = preg_split("/\r\n|\n|\r/", $row["details"]);
            $more_details = preg_split("/\r\n|\n|\r/", $row["more_details"]);
        }
    } else {
        echo "0 results";
    }

    // $sql2 = "select image_path from images where product_id = 1;";
    $result = mysqli_query($link, "select image_path from images where product_id = 1;");
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Close the connection
    mysqli_close($link);
?>
