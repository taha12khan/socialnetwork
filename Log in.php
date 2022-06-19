<?php
session_start();

include 'Backend Modules/Connection.php';

if (isset($_SESSION['Name'])) {
  header('location: sign in.php');
}

include 'Backend Modules/Log in Details.php';
$s = "select * from users where Email = '$E' and Password = '$P'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 0) {
  $_SESSION['Choice'] = 2;
  header('location: sign in.php');
}

else {
  $row = mysqli_fetch_array($result);
  $c = $row["Log_in"] + 1;
  date_default_timezone_set('Asia/Kolkata');
  $Last_Log_in = date("Y-m-d H:i:s");
  $s = "update users set Log_in = '$c', Last_Log_in = '$Last_Log_in' where Email = '$E' and Password = '$P'";
  $result = mysqli_query($con, $s);
  $_SESSION['Email'] = $E;
  $_SESSION['Password'] = $P;
  header('location: Home.php');
}
 ?>
