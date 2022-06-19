<?php
session_start();
include 'Backend Modules/Connection.php';

if (isset($_SESSION['Random'])) {
  if ($_SESSION['Random'] == $_POST['OTP']) {
    include 'Backend Modules/Date and Time.php';
    $N = $_SESSION['Name'];
    $E = $_SESSION['Email'];
    $PN = $_SESSION['Phone_Number'];
    $P = $_SESSION['Password1'];
    $D = $_SESSION['DOB'];
    $G = $_SESSION['Gender'];
    $Designation = 'Pending as a '.$_SESSION['Designation'];
    $U = $_SESSION['User_Name'];
    if (isset($_SESSION['Year'])) {
      $Year = $_SESSION['Year'];
      $S = "Bachelor of Computer Applications (Year - $Year)";
      $reg = "INSERT INTO users (Name, User_Name, Email, Phone_Number, Password, DOB, Gender, Designation, Year, Date_of_Creation, Time_of_Creation, Study, Accepted) values('$N', '$U', '$E', '$PN' ,'$P', '$D', '$G', '$Designation', '$Year', '$Date', '$Time', '$S', 'NO')";
    }
    else {
      $reg = "INSERT INTO users (Name, User_Name, Email, Phone_Number, Password, DOB, Gender, Designation, Date_of_Creation, Time_of_Creation, Accepted) values('$N', '$U', '$E', '$PN' ,'$P', '$D', '$G', '$Designation', '$Date', '$Time','NO')";
    }
    mysqli_query($con, $reg);
    $s = "select * from users where Email = '$E' and User_Name = '$U'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num == 0) {
      $_SESSION['Choice'] = 4;
      header("location: index.php");
    }
    else {
      $_SESSION['Choice'] = 1;
      header("location: sign in.php");
    }
  }
  else {
    $_SESSION['Choice'] = 7;
    header("location: Authentication.php");
  }
}
else {
  header('location: index.php');
}
 ?>
