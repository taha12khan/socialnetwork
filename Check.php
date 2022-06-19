<?php
session_start();
if (isset($_POST['ForgetPasswordAuthontication'])) {
  $O = $_POST['OTP'];
  $r = $_SESSION['Random'];
  $_SESSION['Check'] = 1;
  if ($r == $O) {
    $E = $_SESSION['Email'];
    header("location: New Password.php");
  }
  else {
    $_SESSION['Choice'] = 9;
    header("location: Forget Password Authontication.php");
  }
}
 ?>
