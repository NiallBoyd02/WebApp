<?php
    $stockID = $_GET['stock_id'];

    $conn = new mysqli('localhost', 'root', '', 'webApp');

    $sql = "SELECT stock_name FROM stocktable WHERE id = '$stockID'";

    $random_number = rand(1, 100);

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $stock_name = $row['stock_name'];
            $customerID = $random_number;
    }
    $sql = "INSERT INTO ordertable (stock_name, customerID) VALUES ('$stock_name', '$customerID')";
    } else {
        echo "No results";
    }

    mysqli_close($conn);

?>

