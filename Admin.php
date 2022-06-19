<?php
if (isset($_POST['Approve'])) {
  include 'Backend Modules/Connection.php';
  $TUN = $_POST['Approve'];
  $s = "select Designation from users where User_Name = '$TUN'";
  $result = mysqli_query($con, $s);
  $row = mysqli_fetch_array($result);
  $TD = $row['Designation'];
  $TD = substr($TD, 13);
  $TD = trim($TD);
  $s = "update users set Accepted = 'YES', Designation = '$TD' where User_Name = '$TUN'";
  mysqli_query($con, $s);
  header('location: Admin Panel.php');
}

elseif (isset($_POST['Reject'])) {
  include 'Backend Modules/Connection.php';
  $TUN = $_POST['Reject'];
  $s = "DELETE FROM users WHERE User_Name = '$TUN'";
  mysqli_query($con, $s);
  $s = "DELETE FROM connection WHERE User_Name = '$TUN'";
  mysqli_query($con, $s);
  $s = "DELETE FROM connection WHERE Requested = '$TUN'";
  mysqli_query($con, $s);
  header('location: Admin Panel.php');
}

elseif (isset($_POST['Approve-Post'])) {
  include 'Backend Modules/Connection.php';
  $NUM = $_POST['Approve-Post'];
  $s = "UPDATE posts set Accepted = 'YES' WHERE `Number` = '$NUM'";
  mysqli_query($con, $s);
  header('location: Admin Panel.php');
}

elseif (isset($_POST['Reject-Post'])) {
  include 'Backend Modules/Connection.php';
  $NUM = $_POST['Reject-Post'];
  $s = "DELETE FROM posts WHERE `Number` = '$NUM'";
  mysqli_query($con, $s);
  header('location: Admin Panel.php');
}

elseif (isset($_POST['Delete-Post'])) {
  include 'Backend Modules/Connection.php';
  include 'Backend Modules/Profile.php';
  $NUM = $_POST['Delete-Post'];
  $s = "DELETE FROM posts WHERE `Number` = '$NUM' and User_Name = '$UN'";
  mysqli_query($con, $s);
  header('location: Profile.php');
}

elseif (isset($_POST['Remove'])) {
  include 'Backend Modules/Connection.php';
  $TUN = $_POST['Remove'];
  $s = "DELETE FROM users WHERE User_Name = '$TUN'";
  mysqli_query($con, $s);
  $s = "DELETE FROM connection WHERE User_Name = '$TUN'";
  mysqli_query($con, $s);
  $s = "DELETE FROM connection WHERE Requested = '$TUN'";
  mysqli_query($con, $s);
  header('location: Admin Panel.php');
}

else {
  header('location: Admin Panel.php');
}
 ?>
