<?php include 'Backend Modules/Profile.php'; ?>
<?php if (!($Designation == "Teacher" or $Designation == "Developer" or $Designation == "Student")) {
  header('location: Home.php');
}
?>
<?php
if (isset($_SESSION['Search_Profile'])) {
  $TUN = $_SESSION['Search_Profile'];

  $s = "select * from users where User_Name = '$TUN'";
  $result = mysqli_query($con, $s);
  $row = mysqli_fetch_array($result);
  $TN = $row['Name'];
  $TA = $row['About'];
  $TLI = $row['Lives'];
  $TSI = $row['Study'];
  $TWT = $row['Went'];
  $TD = $row['DOB'];
  $TPP = $row['Profile_Picture'];
  $TDesignation = $row['Designation'];
  $Year = $row['Year'];

  if ($TPP == "") {
    $TPP = "bk_images/avatar-male.png";
  }

  if ($TA == "") {
    $TA = "You need to be odd to be number one";
  }
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
  .team{
    position: relative;
  }

  @media screen and (max-width:1145px) {
     .about-student{
       height: 210px!important;
     }
    .bcb-info{
      height: 180px!important;
    }
  }
  @media screen and (max-width:868px) {
    .bcb-info{
      height: 225px!important;
    }
    .about-student{
      height: 220px!important;
    }

  }
  @media screen and (max-width:767px) {
    .bcb-info{
      height: auto!important;
    }
    .about-student{
      height: auto!important;
    }

  }

  </style>
</head>
<body>
  <?php include 'modules/user-menu.php';?>
  <div class="container-fluid">
    <div class="row form mt-2">
      <div class="col-md-12">
        <form class="form" action="Search.php" class="border" method="get">
          <div class="input-group" >
            <input class="form-control ml-auto" type="text" placeholder="Search" name="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 mt-2" style="">
        <img src="bk_images/background.jpg" class="" alt="" style="width:100%;max-height:350px">
      </div>
      <div class="col-lg-12 col-md-12 p-photo" style="position:relative;top:-75px">
        <div class="team">
          <img src="<?php echo htmlentities($TPP); ?>" class="d-block mx-auto rounded-circle" alt="" style="width:150px;height:150px;border:3px solid white;">
          <div class="icon d-flex justify-content-center align-items-center"></div>
        </div>
        <h3 class="student-name text-center"><?php echo "$TN"; ?></h3>
        <p class="student-bio text-center">"<?php echo "$TA"; ?>"</p>
        <?php
        if ($TDesignation != 'Student') {
          echo "<p class='student-bio text-center' style='margin-top: -15px; color:#3f51b5'>'$TDesignation'</p>";
        }
         ?>
      </div>
      <div class="col-lg-12 col-md-12 d-flex justify-content-center" style="position:relative;top:-75px">
        <?php
          $s = "select User_Name, Requested from connection where (User_Name = '$UN' and Requested = '$TUN' and Accepted = 'YES') or (Requested = '$UN' and User_Name = '$TUN' and Accepted = 'YES')";
          $result1 = mysqli_query($con, $s);
          $num = mysqli_num_rows($result1);
          if ($num == 1) {
            echo "
            <div class='connected'>
              <button disabled type='button' class='btn btn-primary btn-sm m-1' style='font-size:14px; background: #4caf50; opacity: 1; border: 1px solid #5db761;'><i class='fa fa-connectdevelop' aria-hidden='true'></i> Connected</button>
            </div>
            <form action='Connect.php' method='post'>
              <div class='disconnect'>
                <button type='submit' name = 'RejectSP' value = '$TUN' class='btn btn-danger btn-sm m-1'><i class='fa fa-times' aria-hidden='true'></i> Disconnect</button>
              </div>
            </form>
            ";
          }
          else {
            if ($TUN != $UN) {
              $s = "select User_Name, Requested from connection where (User_Name = '$UN' and Requested = '$TUN' and Accepted = 'NO') or (Requested = '$UN' and User_Name = '$TUN' and Accepted = 'NO')";
              $result1 = mysqli_query($con, $s);
              $num = mysqli_num_rows($result1);
              if ($num == 1) {
                echo "
                <form action='Connection Requested.php' method='post'>
                  <div class='connect'>
                    <button type='submit' class='btn btn-danger btn-sm m-1' name = 'DisconectButtonSP' value = '$TUN'><i class='fa fa-times' aria-hidden='true'></i> Cancel Request</button>
                  </div>
                </form>
                ";
              }
              else {
                echo "
                <form action='Connection Requested.php' method='post'>
                  <div class='connect'>
                    <button type='submit' class='btn btn-primary btn-sm m-1' name = 'ConnectButtonSP' value = '$TUN'><i class='fa fa-paperclip' aria-hidden='true'></i> Connect</button>
                  </div>
                </form>
                ";
              }
            }
          }
         ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center" style="position:relative;top:-75px">
      <div class="col-lg-3 col-md-3 about-student bg-white m-3 p-2" style="border-radius:5px;border: 1px solid #7c44ff;height:200px;">
        <h5 class="mb-3 mt-1">About</h5>
        <h6>From: <a href="#"></a> <?php echo "$TLI"; ?> </h6>
        <h6>Lives in: <a href="#"></a> <?php echo "$TLI"; ?> </h6>
        <h6>Studying in: <a href="#"></a> <?php echo "$TSI"; ?> </h6>
        <h6>Went to: <a href="#"></a> <?php echo "$TWT"; ?> </h6>
        <h6>Birthday: <a href="#"></a> <?php echo "$TD"; ?> </h6>
      </div>
      <div class="col-lg-5 col-md-5 bg-white m-3  p-2" style="border-radius:5px;border: 1px solid #7c44ff;min-height:200px;">
        <h4 style="color:red;text-align:center;">Post by <?php echo $TN ?></h4>
        <div class="post">
          <?php
          $s = "select * from posts where User_Name = '$TUN' and Accepted = 'YES' order by Number DESC";
          $result = mysqli_query($con, $s);
          while ($row = mysqli_fetch_array($result)) {
            $TP = $row[2];

            echo "<img src='$TPP' alt='' class='rounded-circle float-left p-1' style='width:40px;height:40px;'>";
            echo "<h4 class='p-1' style=''>$TN</h4>";
            echo "<p>$TP</p>";
            echo "<h4 style='font-size:18px'>$row[5] &emsp; $row[4]</h4><br>";
          }
          ?>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 bg-white m-3  p-2 text-center d-flex justify-content-center flex-column bcb-info" style="border-radius:5px;border: 1px solid #7c44ff;height:160px;">
       <h6>© 2020 BCB Social Network</h6>
       <h6>Made with Love <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> by Coding Monks.</h6>
       <div class="d-flex flex-column">
         <a href="aboutus.php" style="text-decoration:none;">About Us</a>
         <a href="stterm.php" style="text-decoration:none;">Terms and Condition</a>
         <a href="stprivacy.php" style="text-decoration:none;">Privacy Policy</a>
       </div>
      </div>
    </div>
  </div>
</body>
</html>
