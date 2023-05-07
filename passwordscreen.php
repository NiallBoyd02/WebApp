<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "admin" && $pass == "admin") {
        header("Location: customer_manipulation.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
User <input type="text" name="user"><br>
Pass <input type="password" name="pass"><br>
<input type="submit" name="submit" value="Go">
</form>

