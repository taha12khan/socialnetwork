<?php
session_start();
if(isset($_POST['NewPassword'])) {
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  if ($password1 == $password2) {
    include 'Backend Modules/Connection.php';
    $E = $_SESSION['Email'];
    $reg = "update users set Password='$password1' where Email = '$E'";
    mysqli_query($con, $reg);
    $_SESSION['Choice'] = 11;
    header("location: sign in.php");
  }
  else {
    $_SESSION['Choice'] = 10;
    header("location: New Password.php");
  }
}
else {
  header("location: index.php");
}
 ?>
