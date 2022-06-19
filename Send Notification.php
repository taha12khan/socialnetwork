<?php
if (isset($_GET['NotificationAdmin'])) {
  include 'Backend Modules/Profile.php';
  include 'Backend Modules/Connection.php';
  $T = $_GET['Title'];
  $W = $_GET['Whom'];
  $D = $_GET['Description'];
  $reg = "INSERT INTO notification (User_Name, Title, Whom, Description, Seen) values('$UN', '$T', '$W', '$D', ' ')";
  mysqli_query($con, $reg);
  header('location: Notification.php');
}
else {
  header('location: Home.php');
}
?>
