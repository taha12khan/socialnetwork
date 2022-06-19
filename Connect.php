<?php
include 'Backend Modules/Profile.php';
if (isset($_POST['Accept'])) {
  $TUN = $_POST['Accept'];
  $s = "update connection set Accepted = 'YES' where User_Name = '$TUN' and Requested = '$UN'";
  $result = mysqli_query($con, $s);
  header('location: Connection Request.php');
}

elseif (isset($_POST['Reject'])) {
  $TUN = $_POST['Reject'];
  $s = "DELETE FROM connection WHERE User_Name = '$TUN' and Requested = '$UN'";
  $result = mysqli_query($con, $s);
  header('location: Connection Request.php');
}

elseif (isset($_POST['RejectSP'])) {
  $TUN = $_POST['RejectSP'];
  $s = "DELETE FROM connection WHERE User_Name = '$TUN' and Requested = '$UN'";
  $result = mysqli_query($con, $s);
  header('location: Connection.php');
}

else {
  header('location: Connection Request.php');
}
 ?>
