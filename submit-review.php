<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    $conn = new mysqli('localhost', 'root', '', 'webApp');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    } else {
        $sql = "INSERT INTO reviewtbl (customerName, customerEmail, rating, review) VALUES ('$name', '$email', '$rating', '$review')";

if ($conn->query($sql) === TRUE) {
    echo "<p id='feedbackResponse'>Thank You for your feedback</p>";
    echo "<a href='shop.php' id='returnButton'>Click here to go back to store</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        $conn->close();
    }
?>
