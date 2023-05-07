<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="popup.css">
</head>
<body>
  <div class="popup">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
      <input type="submit" value="Login">
    </form>
  </div>

  <?php

    $conn = mysqli_connect('localhost', 'root', '', 'webApp');

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $username = $_POST["username"];
      $password = $_POST["password"];

      $sql = "SELECT * FROM passwords WHERE username = '$username' AND password_hash = '$password'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 1) {

        header("Location: index.php");
        exit;

      } else {
        echo "Invalid username or password.";
      }
    }

    mysqli_close($conn);
  ?>

</body>
</html>