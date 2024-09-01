<?php
    include "db.php";

    $imgPath = $_POST['imgPath'];
    $qty = $_POST['qty'];
    $color = $_POST['color'];
    $size = $_POST['size'];

    $sql = "INSERT INTO carts (total_price) VALUES (0);";
    if(mysqli_query($link, $sql) == false) {
        echo mysqli_error($link);
    }
    $cartID = mysqli_insert_id($link);

    $sql = "INSERT INTO cart_items (`product_id`, `quantity`, `size`, `color`, `cart_id`) VALUES (1,'$qty','$size','$color','$cartID');";
    if(mysqli_query($link, $sql) == false) {
        echo mysqli_error($link);
    }

    $sql = "select * from products where id = 1;";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $price = $row["price"];
        }
    }

    $sql = "UPDATE carts SET total_price=$price*$qty*1.25 WHERE id = $cartID;";
    if(mysqli_query($link, $sql) == false) {
        echo mysqli_error($link);
    }

    header('Location: index.php');
	mysql_close($link);
	die();
?>
