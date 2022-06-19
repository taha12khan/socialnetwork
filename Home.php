<?php include 'Backend Modules/Profile.php'; ?>
<?php
$s = "select * from notice";
$result = mysqli_query($con, $s);
$row = mysqli_fetch_array($result);
$Notice_1 = $row['Notice_1'];
$Notice_2 = $row['Notice_2'];
$Notice_3 = $row['Notice_3'];
$Notice_4 = $row['Notice_4'];
 ?>
<!DOCTYPE html>
<html lang="" dir="ltr">
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
    <!--Style Sheet for homepage font family-->
    <link href="https://fonts.googleapis.com/css?family=Abel|Barlow+Semi+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <style>
    @media screen and (max-width: 1600px) {
      .notice-board{
        font-size: 1.1vw;
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
    @media screen and (max-width: 991px) {
      .notice-board{
        font-size: 20px;
      }
      .common{
        height: auto!important;
      }
    }
    @media screen and (max-width:1065px) {
      .w-post,.bcb-notice,.profile{
        height: auto!important;
      }
    }
    </style>
  </head>
  <body>
    <?php include 'modules/user-menu.php';?>
    <div class="container-fluid">
      <div class="row form mt-2 pt-2">
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
      <div class="row mt-2 d-flex justify-content-center">
        <div class="col-xl-2 col-lg-2 m-3 p-2 bg-white common profile" style="border-radius:5px;border: 1px solid #7c44ff;height:235px;">
        <img src="<?php echo htmlentities($PP); ?>" class="rounded-circle d-flex mx-auto" alt="<?php echo htmlentities($N); ?>" style="width:70px;height:70px;">
        <a href="Profile.php" style="text-decoration: none"><h4 class="text-center"><?php echo "$N"; ?></h4></a>
        <p class="text-center"><?php echo "$A"; ?></p>
        <h6 class="text-center"><span style="color:blue;"><a href="Connection.php" style="color: blue">Connections</a> | Designation</span></h6>
        <h6 class="text-center"><a href="#"></a><span class="text-center"> <?php echo "$C"; ?> | <?php echo "$Designation"; ?></span><a href="#"></a></h6>
        </div>
        <div class="col-xl-6 col-lg-6 m-3 p-2 bg-white common w-post" style="border-radius:5px;border: 1px solid #7c44ff;height:235px;">
          <form class="m-1" action="Post.php" method="post">
            <div class="input-group">
              <textarea name="post" class="m-1 p-2" rows="" cols="" style="width:100%;height:150px;resize:none;border: 1px solid #7c44ff;outline:none;border-radius:5px;" placeholder="Write something to post on BCB"></textarea>
            </div>
            <div class="input-group d-flex justify-content-end">
              <button type="submit" class="btn btn-primary mt-2">Post Now</button>
            </div>
          </form>
        </div>
        <div class="col-xl-2 col-lg-2 m-3 p-2 bg-white common bcb-notice" style="border-radius:5px;border: 1px solid #7c44ff;height:245px;">
        <h4 class="text-center" style="text-decoration: underline;">Notice Board</h4>
        <ul class="notice-board">
          <li><a href="#" style="text-decoration:none;"><?php echo $Notice_1; ?></a></li>
          <li><a href="#" style="text-decoration:none;"><?php echo $Notice_2; ?></a></li>
          <li><a href="#" style="text-decoration:none;"><?php echo $Notice_3; ?></a></li>
          <li><a href="#" style="text-decoration:none;"><?php echo $Notice_4; ?></a></li>
        </ul>
        <?php
        if ($Designation == "Teacher" or $Designation == "Developer") {
          echo "<h6 style='font-size: 14px; font-weight: bold;  text-align: center;'><a href='Notice.php' style='color: #f44336;'> Want to Update a Notice ! Click here</a></h6>";
        }
         ?>
        </div>
      </div>
      <div class="row mt-1 d-flex justify-content-center">
        <div class="col-lg-2 m-3 p-2 bg-white common about-student" style="border-radius:5px;border: 1px solid #7c44ff;height:200px;">
          <h4 class="text-center">About</h4>
          <h6>From: <?php echo "$LI"; ?></h6>
          <h6>Lives in: <?php echo "$LI"; ?></h6>
          <h6>Studying in: <?php echo "$SI"; ?></h6>
          <h6>Went to: <?php echo "$WT"; ?></h6>
          <h6>Birthday: <?php echo "$D"; ?></h6>
        </div>
        <div class="col-lg-6 m-3 p-2 bg-white common" style="border-radius:5px;border: 1px solid #7c44ff">
          <h4 class="text-center">News Feed</h4>
          <?php
            $s = "select User_Name from connection where Requested = '$UN' and Accepted = 'YES'";
            $result = mysqli_query($con, $s);
            $All_UN = "'".$UN."'";
            while ($row = mysqli_fetch_array($result)) {
              $All_UN = $All_UN.", '".$row[0]."'";
            }

            $s = "select Requested from connection where User_Name = '$UN' and Accepted = 'YES'";
            $result = mysqli_query($con, $s);
            while ($row = mysqli_fetch_array($result)) {
              $All_UN = $All_UN.", '".$row[0]."'";
            }

            $s = "SELECT User_Name, Post, Date, Time FROM posts WHERE User_Name IN ($All_UN) and Accepted = 'YES' ORDER BY Number DESC";
            $result = mysqli_query($con, $s);
            while ($row = mysqli_fetch_array($result)) {
              $TUN = $row['User_Name'];
              $s = "select Name, Profile_Picture from users where User_Name = '$TUN'";
              $result1 = mysqli_query($con, $s);
              $ROW = mysqli_fetch_array($result1);
              $TN = $ROW['Name'];
              $TPP = $ROW['Profile_Picture'];
              $TPOST = $row['Post'];
              $TTIME = $row['Time'];
              $TDATE = $row['Date'];
              echo "
                <img src='$TPP' alt='' class='rounded-circle float-left p-1' style='width:40px;height:40px;'>
                <h4 class='p-1' style=''>$TN</h4>
                <h4 style='font-size:18px'>$TPOST</h4>
                <p>$TDATE &emsp; $TTIME</p>
              ";
            }
           ?>
        </div>
        <div class="col-lg-2 m-3 p-2 bg-white common text-center bcb-info" style="border-radius:5px;border: 1px solid #7c44ff;height:160px;">
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
