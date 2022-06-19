<?php
session_start();

include 'Backend Modules/Connection.php';
include 'Backend Modules/User Details.php';

$file = $_FILES['Image'];
$fileName = $_FILES['Image']['name'];
$fileTmpName = $_FILES['Image']['tmp_name'];
$fileSize = $_FILES['Image']['size'];
$fileError = $_FILES['Image']['error'];
$fileType = $_FILES['Image']['type'];

$fileExt = explode('.', $fileName);

$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');

if (in_array($fileActualExt, $allowed)) {
  if ($fileError == 0) {
    if ($fileSize < 2097152) {
      if($PP != ""){
        unlink("$PP");
      }
      $fileNameNew = $UN.".".$fileActualExt;
      $fileDestination = 'Profile Picture/'.$fileNameNew;
      move_uploaded_file($fileTmpName, $fileDestination);
      $PP = $fileDestination;
      $reg = "update users set Profile_Picture='$PP' where Email = '$E'";
      mysqli_query($con, $reg);
      header('location: Profile.php');
    }
    else {
      //echo "Your image is too big!.";
      header('location: Profile.php');
    }
  }
  else {
    //echo "There was an Error Uploading your image!";
    header('location: Profile.php');
  }
}
else {
  //echo "You can't upload images of this type!";
  header('location: Profile.php');
}
 ?>
