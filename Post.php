<?php
include 'Backend Modules/Profile.php';
include 'Backend Modules/Connection.php';
include 'Backend Modules/Date and Time.php';
if (!($Designation == "Teacher" or $Designation == "Developer" or $Designation == "Student")) {
  header('location: Home.php');
}
else {
  $post = $_POST['post'];
  $post = str_replace("'", "\'", $post);
  if ($Designation == 'Teacher' or $Designation == 'Developer') {
    $reg = "insert into posts (User_Name, Post, Accepted, Date, Time) values('$UN', '$post', 'YES', '$Date', '$Time')";
  }
  else {
    $reg = "insert into posts (User_Name, Post, Accepted, Date, Time) values('$UN', '$post', 'NO', '$Date', '$Time')";
  }
  mysqli_query($con, $reg);
  if (isset($_POST['ProfilePost'])) {
    header("location: Profile.php");
  }
  else {
    header("location: Home.php");
  }
}
?>
