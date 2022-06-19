<?php include 'Backend Modules/Profile.php'; ?>
<?php if (!($Designation == "Teacher" or $Designation == "Developer" or $Designation == "Student")) {
  header('location: Home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo "$N"; ?> - BCB Social Network</title>
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

  .team i:hover{
    transform: scale(1.2);
  }

  .icon{
    position: absolute;
    height: 40px;
    width: 40px;
    background-color: #d3d4d3;
    border:3px solid white;
    border-radius: 50%;
  }

  @media screen and (min-width:720px) {
    .icon{
      position: absolute;
      left:53%!important;
      top:110px;
    }
  }

  @media screen and (max-width:720px) {
    .icon{
      position: absolute;
      left:57%!important;
      top:110px;
    }
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
        <img src="bk_images/background.jpg" alt="" style="width:100%;max-height:350px">
      </div>
      <div class="col-lg-12 col-md-12 p-photo" style="position:relative;top:-75px">
        <div class="team">
          <img src="<?php echo htmlentities($PP); ?>" class="d-block mx-auto rounded-circle" alt="" style="width:150px;height:150px;border:3px solid white;">
          <form action="Image Upload.php" method="post" enctype="multipart/form-data">
            <div class="icon d-flex justify-content-center align-items-center">
            <input type="file" name="Image" value="" id="real-file" hidden>
            <i class="fa fa-camera upload-button" style="" id="custom-button"></i>
            <button type="submit" name="button" id="click" hidden></button>
            </div>
          </form>
        </div>
        <h3 class="student-name text-center"><?php echo "$N"; ?></h3>
        <p class="student-bio text-center">"<?php echo "$A" ?>"</p>
        <?php
        if ($Designation != 'Student') {
          echo "<p class='student-bio text-center' style='margin-top: -15px; color:#3f51b5'>'$Designation'</p>";
        }
         ?>
      </div>
    </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center" style="position:relative;top:-75px">
      <div class="col-lg-3 col-md-3 about-student bg-white m-3 p-2" style="border-radius:5px;border: 1px solid #7c44ff;height:200px;">
        <h5 class="mb-3 mt-1">About <sub><a href="Edit Profile.php" style="text-decoration:none;">edit</a></sub></h5>
        <h6>From: <a href="#"></a> <?php echo "$LI"; ?> </h6>
        <h6>Lives in: <a href="#"></a> <?php echo "$LI"; ?> </h6>
        <h6>Studying in: <a href="#"></a> <?php echo "$SI"; ?> </h6>
        <h6>Went to: <a href="#"></a> <?php echo "$WT"; ?> </h6>
        <h6>Birthday: <a href="#"></a> <?php echo "$D"; ?> </h6>
      </div>
      <div class="col-lg-5 col-md-5 bg-white m-3  p-2" style="border-radius:5px;border: 1px solid #7c44ff;min-height:200px">
        <form class="m-1" action="Post.php" method="post">
          <div class="input-group">
            <textarea name="post" class="m-1 p-2" rows="" cols="" style="width:100%;height:130px;resize:none;border: 1px solid #7c44ff;outline:none;border-radius:5px;" placeholder="Write something to post on BCB"></textarea>
          </div>
          <div class="input-group d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mt-2" name="ProfilePost">Post write now</button></div>
        </form>
        <script type="text/javascript" src="Script.js"></script>
        <?php
        $s = "select * from posts where User_Name = '$UN' order by Number DESC";
        $result = mysqli_query($con, $s);
        while ($row = mysqli_fetch_array($result)) {
          $P = $row[2];
          echo "<img src='$PP' alt='' class='rounded-circle float-left p-1' style='width:40px;height:40px;'>";
          echo "<h4 class='p-1' style=''>$N</h4>";
          echo "<p>$P</p>";
          echo "
          <div class='control d-flex justify-content-between'>
            <h4 style='font-size:18px'>$row[5] &emsp; $row[4]</h4>
            <form action='Admin.php' method='post'>
              <button name = 'Delete-Post' type='submit' class='btn btn-danger btn-sm' value = $row[0]>Delete Post</button>
            </form>
          </div>
          ";
          if ($row[3] == 'NO') {
            echo "<p style='color:red;'>Not Approved</p><br>";
          }
          else {
            echo "<br>";
          }
        }
        ?>
      </div>
      <div class="col-lg-2 col-md-2 bg-white m-3  p-2 text-center d-flex justify-content-center flex-column" style="border-radius:5px;border: 1px solid #7c44ff;height:160px;">
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
