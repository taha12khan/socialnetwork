<?php include 'Backend Modules/Profile.php'; ?>
<?php if (!($Designation == "Teacher" or $Designation == "Developer" or $Designation == "Student")) {
  header('location: Home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BCB Social Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Abel|Barlow+Semi+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/menu.css">
  <style>
  .bio{
     position: relative;
     left:5px;
     top: 5px;
  }
  .bio a{
    text-decoration: none;
  }
  .search{
    box-shadow: 10px 6px 9px rgba(0,0,0,.12), 10px 6px 9px rgba(0,0,0,.24);
    border-radius: 10px;
  }
  .msg-body{
    position: relative;
    border-top: 1px solid;
  }
  </style>
</head>
<body style="padding-bottom: 50px;">
<?php include 'modules/user-menu.php';?>
<script type='text/javascript'>
  document.getElementById('glow').style.display = 'none';
</script>
<?php
if ($Designation == 'Developer') {
  $s = "select * from notification order by Number desc";
}
elseif ($Designation == 'Teacher') {
  $s = "select * from notification where User_Name = '$UN' or  Whom = 1 or Whom = 2 or Whom = 3 or Whom = 5 order by Number desc";
}
else {
  $s = "select * from notification where Whom = '$Year' or Whom = 4 or Whom = 5 order by Number desc";
}
$result = mysqli_query($con, $s);
$row = mysqli_fetch_array($result);
$Seen = $row['Seen'];
$NUM = $row['Number'];
$TSeen = $Seen;
$TUN = $UN;
if (!(strpos($TSeen, $TUN))) {
  $Seen = $Seen." ".$UN;
  $s = "UPDATE notification set Seen = '$Seen' where `Number` = '$NUM'";
  $result = mysqli_query($con, $s);
}
 ?>
<div class="container-fluid">
   <div class="row d-flex justify-content-center align-items-center mt-3">
     <div class="col-lg-12 col-md-12 col-sm-12 text-center">
      <h5><span style="color:red;">Notification Panel</span></h5>
     </div>
     <?php
     if ($Designation == "Developer") {
       echo "<div class='col-lg-12 col-md-12 col-sm-12 text-center'><a href='Notification Admin.php' style='text-decoration:none'><h5>Wana Send a message to all Student ! Click Here</h5></a></div>";
       $s = "select * from notification order by Number desc";
       $result = mysqli_query($con, $s);
       while ($row = mysqli_fetch_array($result)) {
         $T = $row['Title'];
         $W = $row['Whom'];
         $Desc = $row['Description'];
         $TUN = $row['User_Name'];
         $s = "select Name, Designation, Profile_Picture from users where User_Name = '$TUN'";
         $result1 = mysqli_query($con, $s);
         $result1 = mysqli_fetch_array($result1);
         $TN = $result1['Name'];
         $TD = $result1['Designation'];
         $TPP = $result1['Profile_Picture'];
         if ($TPP == "") {
           $TPP = "bk_images/avatar-male.png";
         }
         echo "<div class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center'>
           <div class='col-lg-6 col-md-6 p-2 bg-white search'>
             <div class='profile'>
               <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px;'>
               <div class='bio'>
                 <a href='#'><h4><span>$TN</span></h4></a>
                 <h4 style='font-size:18px'><span>$TD</span> </h4>
               </div>
             </div>
             <div class='msg-body mt-3 p-1'>
               <h4 style='font-size:20px'>$T</h4>
               <h5 style='font-size:18px'>'$Desc'</h5>
             </div>
           </div>
         </div>";
       }
     }

     elseif ($Designation == 'Teacher') {
       echo "<div class='col-lg-12 col-md-12 col-sm-12 text-center'><a href='Notification Admin.php' style='text-decoration:none'><h5>Wana Send a message to all Student ! Click Here</h5></a></div>";
       $s = "select * from notification where User_Name = '$UN' or  Whom = 1 or Whom = 2 or Whom = 3 or Whom = 5 order by Number desc";
       $result = mysqli_query($con, $s);
       while ($row = mysqli_fetch_array($result)) {
         $T = $row['Title'];
         $W = $row['Whom'];
         $Desc = $row['Description'];
         $TUN = $row['User_Name'];
         $s = "select Name, Designation, Profile_Picture from users where User_Name = '$TUN'";
         $result1 = mysqli_query($con, $s);
         $result1 = mysqli_fetch_array($result1);
         $TN = $result1['Name'];
         $TD = $result1['Designation'];
         $TPP = $result1['Profile_Picture'];
         if ($TPP == "") {
           $TPP = "bk_images/avatar-male.png";
         }
         echo "<div class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center'>
           <div class='col-lg-6 col-md-6 p-2 bg-white search'>
             <div class='profile'>
               <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px;'>
               <div class='bio'>
                 <a href='#'><h4><span>$TN</span></h4></a>
                 <h4 style='font-size:18px'><span>$TD</span> </h4>
               </div>
             </div>
             <div class='msg-body mt-3 p-1'>
               <h4 style='font-size:20px'>$T</h4>
               <h5 style='font-size:18px'>'$Desc'</h5>
             </div>
           </div>
         </div>";
       }
     }

     elseif ($Year == 1 or $Year == 2 or $Year == 3) {
       $s = "select * from notification where Whom = $Year or Whom = 4 or Whom = 5 order by Number desc";
       $result = mysqli_query($con, $s);
       while ($row = mysqli_fetch_array($result)) {
         $T = $row['Title'];
         $W = $row['Whom'];
         $Desc = $row['Description'];
         $TUN = $row['User_Name'];
         $s = "select Name, Designation, Profile_Picture from users where User_Name = '$TUN'";
         $result1 = mysqli_query($con, $s);
         $result1 = mysqli_fetch_array($result1);
         $TN = $result1['Name'];
         $TD = $result1['Designation'];
         $TPP = $result1['Profile_Picture'];
         if ($TPP == "") {
           $TPP = "bk_images/avatar-male.png";
         }
         echo "<div class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center'>
           <div class='col-lg-6 col-md-6 p-2 bg-white search'>
             <div class='profile'>
               <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px;'>
               <div class='bio'>
                 <a href='#'><h4><span>$TN</span></h4></a>
                 <h4 style='font-size:18px'><span>$TD</span> </h4>
               </div>
             </div>
             <div class='msg-body mt-3 p-1'>
               <h4 style='font-size:20px'>$T</h4>
               <h5 style='font-size:18px'>'$Desc'</h5>
             </div>
           </div>
         </div>";
       }
     }
    ?>
</div>
</body>
</html>
