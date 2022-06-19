<?php
include 'Backend Modules/Profile.php';

if (isset($_POST['ConnectButton'])) {
  $R = $_POST['ConnectButton'];
  $s = "select * from connection where (User_Name = '$UN' and Requested = '$R') or (Requested = '$UN' and User_Name = '$R')";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);
  $Search = $_SESSION['Search'];
  if ($num == 0) {
    if ($num == 0) {
      $s = "insert into connection (User_Name, Requested, Accepted) values ('$UN', '$R', 'NO')";
      $result = mysqli_query($con, $s);
      $Search = $_SESSION['Search'];
      header('location: Search.php?Search='.$Search);
    }
  }
  header('location: Search.php?Search='.$Search);
}

elseif (isset($_POST['ConnectButtonSP'])) {
  $R = $_POST['ConnectButtonSP'];
  $s = "select * from connection where (User_Name = '$UN' and Requested = '$R') or (Requested = '$UN' and User_Name = '$R')";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);
  $Search = $_SESSION['Search'];
  if ($num == 0) {
    $s = "insert into connection (User_Name, Requested, Accepted) values ('$UN', '$R', 'NO')";
    $result = mysqli_query($con, $s);
    $Search = $_SESSION['Search'];
  }
  header('location: Search Profile.php');
}

elseif (isset($_POST['DisconectButton'])) {
  $R = $_POST['DisconectButton'];
  $s = "DELETE FROM connection WHERE (User_Name = '$UN' and Requested = '$R') or (User_Name = '$R' and Requested = '$UN')";
  $result = mysqli_query($con, $s);
  $Search = $_SESSION['Search'];
  header('location: Search.php?Search='.$Search);
}

elseif (isset($_POST['DisconectButtonSP'])) {
  $R = $_POST['DisconectButtonSP'];
  $s = "DELETE FROM connection WHERE (User_Name = '$UN' and Requested = '$R') or (User_Name = '$R' and Requested = '$UN')";
  $result = mysqli_query($con, $s);
  header('location: Search Profile.php');
}

elseif (isset($_POST['Search_Profile'])) {
  $_SESSION['Search_Profile'] = $_POST['Search_Profile'];
  header('location: Search Profile.php');
}


else {
  header('location: Home.php');
}
?>
