<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '_dbconnect.php';
  $user_email = $_POST['signupemail'];
  $pass = $_POST['signuppassword'];
  $cpass = $_POST['signupcpassword'];

  // check wheteher this email exist
  $existSql = "SELECT * from `users` WHERE user_email = '$user_email'";
  $result = mysqli_query($conn, $existSql);
  $numRows = mysqli_num_rows($result);
  if ($numRows > 0) {
    $showError = "Username already in use. Please enter another username";
  } else {
    if ($pass == $cpass) {
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (`user_email` , `user_pass` , `timestamp`) VALUES ('$user_email' , '$hash' , current_timestamp())";
      $result = mysqli_query($conn, $sql);
      
      if ($result) {
        $showAlert = true;
        header("Location: /forums/index.php?signupsuccess=true");
        exit();
      }

    } else {
      $showError = "Passwords do not match";
    }
  }
  header("Location: /forums/index.php?signupsuccess=false&error=$showError"); 
}

?>