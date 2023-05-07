<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli('localhost', 'root', '', 'webApp');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $action = $_POST['action'];

    $FirstName = $_POST['FirstName'];
    $Surname = $_POST['Surname'];
    $MobileNo = $_POST['MobileNo'];
    $EmailAddress = $_POST['EmailAddress'];
    $ShippingAddress = $_POST['ShippingAddress'];
    $BillingAddress = $_POST['BillingAddress'];
    $CustomerID = $_POST['CustomerID'];
    $random_number = mt_rand(0, 9000);
    

    if ($action == 'add') {       
        $sql = "INSERT INTO customertbl (CustomerID, FirstName, Surname, MobileNo, EmailAddress, ShippingAddress, BillingAddress) VALUES ('$random_number','$FirstName', '$Surname', '$MobileNo', '$EmailAddress', '$ShippingAddress', '$BillingAddress')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New customer added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }




    if ($action == 'delete') {
        $EmailAddress = $_POST['EmailAddress'];
        
        $sql = "DELETE FROM customertbl WHERE EmailAddress='$EmailAddress'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Customer deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}




if (isset($_GET['search'])) {
    $search_term = $_GET['search_term'];
    $sql = "SELECT * FROM customertbl WHERE CustomerID='$CustomerID'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "FirstName: " . $row['FirstName'] . "<br>";
            echo "Surname: " . $row['Surname'] . "<br>";
            echo "EmailAddress: " . $row['EmailAddress'] . "<br>";
            echo "MobileNo: " . $row['MobileNo'] . "<br>";
            echo "ShippingAddress: " . $row['ShippingAddress'] . "<br>";
            echo "BillingAddress: " . $row['BillingAddress'] . "<br><br>";
        }
    } else {
        echo "No results found";
    }
}
?>




<form method="post">
    <input type="hidden" name="action" value="add">
    <input type="text" name="FirstName" placeholder="First Name" required><br>
    <input type="text" name="Surname" placeholder="Surname" required><br>
    <input type="email" name="EmailAddress" placeholder="Email Address" required><br>
    <input type="tel" name="MobileNo" placeholder="Mobile No" required><br>
    <input type="text" name="ShippingAddress" placeholder="Shipping Address" required><br>
    <input type="text" name="BillingAddress" placeholder="Billing Address" required><br>
    <input type="submit" name="submit" value="Add Customer">
</form>



<form method="post">
    <input type="hidden" name="action" value="delete">
    <input type="email" name="EmailAddress" placeholder="Email Address" required><br>
    <input type="submit" name="submit" value="Delete Customer">
</form>



<form method="get">
    <input type="text" name="search_term" placeholder="Search for customer by ID" required>
    <input type="submit" name="search" value="Search">
</form>
