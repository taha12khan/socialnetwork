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
  }
  .bio a{
    text-decoration: none;
  }
  .req{
    box-shadow: 10px 6px 9px rgba(0,0,0,.12), 10px 6px 9px rgba(0,0,0,.24);
    border-radius: 10px;
  }
  </style>
</head>
<body>
  <?php include 'modules/user-menu.php';?>
  <script type='text/javascript'>
    document.getElementById('glow-connection').style.display = 'none';
  </script>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center mt-3 ">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
       <h5><span style="color:red;">Friend Request</span></h5>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-1">
        <?php
          $s = "select User_Name from connection where Requested = '$UN' and Accepted = 'NO'";
          $result = mysqli_query($con, $s);
          while ($row = mysqli_fetch_array($result)) {
            $TUN = $row['User_Name'];
            $s = "select Name, Profile_Picture from users where User_Name = '$TUN'";
            $result1 = mysqli_query($con, $s);
            $ROW = mysqli_fetch_array($result1);
            $TN = $ROW['Name'];
            $TPP = $ROW['Profile_Picture'];
            if ($TPP == "") {
              $TPP = "bk_images/avatar-male.png";
            }
            echo "
            <div class='col-lg-6 col-md-6 p-2 bg-white req'>
              <div class='profile'>
                <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px;'>
                <div class='bio'>
                  <a href='#'><h4><span>$TN</span></h4></a>
                  <div class='req-btn'>
                    <form action='Connect.php' method='post'>
                      <button type='submit' class='btn btn-primary btn-sm' name = 'Accept' value = '$TUN'>Accept</button>
                      <button type='submit' class='btn btn-danger btn-sm' name = 'Reject' value = '$TUN'>Reject</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            ";
          }
         ?>
      </div>
    </div>
  </div>
</body>
</html>
