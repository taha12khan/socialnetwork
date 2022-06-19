<?php
include 'Backend Modules/Profile.php';

$Notice_1 = $_POST['Notice_1'];
$Notice_2 = $_POST['Notice_2'];
$Notice_3 = $_POST['Notice_3'];
$Notice_4 = $_POST['Notice_4'];
$reg = "update notice set Notice_1='$Notice_1', Notice_2='$Notice_2', Notice_3='$Notice_3', Notice_4='$Notice_4'";
mysqli_query($con, $reg);
header('location: Home.php');
 ?>
