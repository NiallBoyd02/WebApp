<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="popup.css">
  </head>
  <body>
<button onclick="document.getElementById('loginPopup').style.display='block'">Login</button>

<div id="loginPopup" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
  <input type="hidden" name="action" value="add">
    <div class="imgcontainer">
      <span onclick="document.getElementById('loginPopup').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password_hash" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
  <button type="button" onclick="location.href='guest.html';document.getElementById('loginPopup').style.display='none';" class="guestbtn">Continue as Guest</button>
</div>
</body>
</html>

<?php

$username = $_POST["username"];
$password_hash = $_POST["password_hash"];

if ($action == 'add') {       
        $sql = "INSERT INTO passwords (username, password_hash) VALUES ('$username', '$password_hash')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New password added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>


