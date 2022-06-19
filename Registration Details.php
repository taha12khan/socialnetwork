<?php
session_start();
include 'Backend Modules/Connection.php';
include 'Backend Modules/Registration Details.php';

$s = "select * from users where User_Name = '$U'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($N == "" || $E == "" || $PN == "" || $P == "" || $D == "" || $G == "" || $U == "" || $Designation == "") {
  $_SESSION['Choice'] = 6;
  header("location: index.php");
}
else {
  $TU = $U;
  if (strpos($TU, " ")) {
    $_SESSION['Choice'] = 14;
    header('location: index.php');
  }
  else {
    if ($CP == $P) {
      if ($num == 0) {
        $s = "select * from users where Email = '$E'";
        $result = mysqli_query($con, $s);
        $num = mysqli_num_rows($result);

        if($num == 0) {
          $r = rand(100000,1000000);
          $_SESSION['Random'] = $r;
          include 'Backend Modules/Mail.php';
          header("location: Authentication.php");
        }
        else {
          $_SESSION['Choice'] = 3;
          header('location: index.php');
        }
      }
      else {
        $_SESSION['Choice'] = 5;
        header("location: index.php");
      }
    }
    else {
      $_SESSION['Choice'] = 12;
      header("location: index.php");
    }
  }
}
 ?>
