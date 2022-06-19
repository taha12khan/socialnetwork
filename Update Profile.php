<?php
session_start();

include 'Backend Modules/Connection.php';
include 'Backend Modules/User Details.php';

$N = $_POST['Name'];
$A = $_POST['About'];
$LI = $_POST['Lives_in'];
$WT = $_POST['Went_to'];
$D = $_POST['DOB'];
$PN = $_POST['Phone_Number'];

$N = str_replace("'", "\'", $N);
$A = str_replace("'", "\'", $A);
$LI = str_replace("'", "\'", $LI);
$WT = str_replace("'", "\'", $WT);
$D = str_replace("'", "\'", $D);

$reg = "update users set Name='$N' ,DOB='$D', About='$A', Lives='$LI', Went='$WT', Phone_Number='$PN' where Email = '$E'";
mysqli_query($con, $reg);

if($A=="") {
  $reg = "update users set About = NULL WHERE Email = '$E'";
  mysqli_query($con, $reg);
}

if($LI=="") {
  $reg = "update users set Lives = NULL WHERE Email = '$E'";
  mysqli_query($con, $reg);
}

if($SI=="") {
  $reg = "update users set Study = NULL WHERE Email = '$E'";
  mysqli_query($con, $reg);
}

if($WT=="") {
  $reg = "update users set Went = NULL WHERE Email = '$E'";
  mysqli_query($con, $reg);
}

if($PP=="") {
  $reg = "update users set Profile_Picture = NULL WHERE Email = '$E'";
  mysqli_query($con, $reg);
}

header('location: Edit Profile.php');
 ?>
