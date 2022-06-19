<?php include 'Backend Modules/Profile.php'; ?>
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

  $s = "SELECT Name, User_Name, Designation, Profile_Picture from users WHERE User_Name IN ($All_UN)";
  $result = mysqli_query($con, $s);
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

  </style>
</head>
<body>
<?php include 'modules/user-menu.php';?>
<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-12 col-md-12 col-sm-12 p-2 m-2 text-center">
     <h5><span style="color:red;">You are Connected to <?php echo $C ?> People</span></h5>
    </div>

    <?php
    while ($row = mysqli_fetch_array($result)) {
      $TUN = $row['User_Name'];
      if ($TUN == $UN) {
        continue;
      }
      $TN = $row['Name'];
      $TD = $row['Designation'];
      $TPP = $row['Profile_Picture'];
      $TUN = $row['User_Name'];
      $TUNN = $TUN.'N';
      echo "
      <form class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center' action='Connection Requested.php' method='post'>
        <div class='col-lg-6 p-2 bg-white search'>
          <div class='profile' id='$TUN'>
            <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px;'>
            <div class='bio'>
              <h4><span style='color:#007bff; cursor: pointer'>$TN</span></h4>
              <h4 style='font-size:18px'><span>$TD</span> </h4>
            </div>
          </div>
          <button type='submit' name='Search_Profile' id='$TUNN' hidden value='$TUN'></button>
          <script type='text/javascript'>
            document.getElementById('$TUN').onclick = function () {
              document.getElementById('$TUNN').click();
            }
          </script>
        </div>
      </form>
      ";
    }
     ?>
  </div>
</div>
</body>
</html>
