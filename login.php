<?php

include "connection.php";

if (isset($_POST['username']) && ($_POST['wachtwoord'])) {
  $username =  $_POST['username'];
  $wachtwoord =  $_POST['wachtwoord'];
  $query = "SELECT * FROM users WHERE username = '$username' AND wachtwoord = '$wachtwoord'";
  $result = $conn->query($query);
  if ($result === FALSE) {
      echo "error" . $query . "<br />" . $conn->error;
  } else {
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["username"] = $row['username'];
            } 
        } 
    } 
}

if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span class="close" title="Close Modal">&times;</span>
      <img src ="logo.png">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="wachtwoord" id="wachtwoord" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <a href="register.php">Nog geen account klik hier</a>
    </div>
  </form>

  
</body>
    
</html>