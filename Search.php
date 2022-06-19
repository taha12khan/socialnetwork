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

  @media screen and (max-width: 480px) {
    .act {
      position: relative !important;
      top: 0px !important;
      right: 0px !important;
    }
  }
  </style>
</head>
<body>
<?php include 'modules/user-menu.php';?>
<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-12 col-md-12 col-sm-12 p-2 m-2 text-center">
     <h5>Showing Result for <span style="color:red;"><?php echo $_GET['Search']; ?></span> </h5>
    </div>
    <?php
    $Search = $_GET['Search'];
    $_SESSION['Search'] = $Search;
    $arr = array();
    array_push($arr, $UN);
    $s = "select User_Name, Name, Designation, Profile_Picture from users where Name LIKE '$Search'";
    $result = mysqli_query($con, $s);
    while ($ROW = mysqli_fetch_array($result)) {
      $TUN = $ROW['User_Name'];
      if (!in_array($TUN,$arr)) {
        array_push($arr, $TUN);
        $TN = $ROW['Name'];
        $TPP = $ROW['Profile_Picture'];
        $TDesignation = $ROW['Designation'];
        if ($TPP == "") {
          $TPP = "bk_images/avatar-male.png";
        }
        echo "
        <div class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center'>
          <form class='col-lg-6 col-md-6 p-2 bg-white search' action='Connection Requested.php' method='post'>
            <div class='profile' id='$TUN'>
              <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px; cursor:pointer'>
              <div class='bio'>
                <h4><span style='color:#007bff; cursor: pointer'>$TN</span></h4>
                <h4 style='font-size:18px; cursor: pointer'><span>$TDesignation</span></h4>
              </div>
              ";
              if ($TN != $N) {
                $s = "select User_Name, Requested from connection where (User_Name = '$UN' and Requested = '$TUN' and Accepted = 'YES') or (Requested = '$UN' and User_Name = '$TUN' and Accepted = 'YES')";
                $result1 = mysqli_query($con, $s);
                $num = mysqli_num_rows($result1);
                if ($num == 1) {
                  echo "<button disabled type = 'button' class='btn btn-primary act float-left' style='position:absolute;top:24px;right:10px; font-size:14px; background: #4caf50; opacity: 1; border: 1px solid #5db761;' ><i class='fa fa-connectdevelop' aria-hidden='true'></i> Connected</button>";
                }
                else {
                  echo "<button type='submit' class='btn btn-primary float-left act' style='position:absolute;top:24px;right:10px;' name = 'ConnectButton' value = '$TUN'><i class='fa fa-paperclip' aria-hidden='true'></i> Connect</button>";
                }
              }
              $TUNN = $TUN.'N';
              echo "
                <button type='submit' name='Search_Profile' id='$TUNN' hidden value='$TUN'></button>
                <script type='text/javascript'>
                  document.getElementById('$TUN').onclick = function () {
                    document.getElementById('$TUNN').click();
                  }
                </script>
              </div>
            </form>
          </div>
              ";
      }
    }

    $s = "select User_Name, Name, Designation, Profile_Picture from users where Name LIKE '$Search%'";
    $result = mysqli_query($con, $s);
    while ($ROW = mysqli_fetch_array($result)) {
      $TUN = $ROW['User_Name'];
      if (!in_array($TUN,$arr)) {
        array_push($arr, $TUN);
        $TN = $ROW['Name'];
        $TPP = $ROW['Profile_Picture'];
        $TDesignation = $ROW['Designation'];
        if ($TPP == "") {
          $TPP = "bk_images/avatar-male.png";
        }
        echo "
        <div class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center'>
          <form class='col-lg-6 col-md-6 p-2 bg-white search' action='Connection Requested.php' method='post'>
            <div class='profile' id='$TUN'>
              <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px; cursor:pointer'>
              <div class='bio'>
                <h4><span style='color:#007bff; cursor: pointer'>$TN</span></h4>
                <h4 style='font-size:18px; cursor: pointer'><span>$TDesignation</span></h4>
              </div>
              ";
              if ($TN != $N) {
                $s = "select User_Name, Requested from connection where (User_Name = '$UN' and Requested = '$TUN' and Accepted = 'YES') or (Requested = '$UN' and User_Name = '$TUN' and Accepted = 'YES')";
                $result1 = mysqli_query($con, $s);
                $num = mysqli_num_rows($result1);
                if ($num == 1) {
                  echo "<button disabled type = 'button' class='btn btn-primary act float-left' style='position:absolute;top:24px;right:10px; font-size:14px; background: #4caf50; opacity: 1; border: 1px solid #5db761;' ><i class='fa fa-connectdevelop' aria-hidden='true'></i> Connected</button>";
                }
                else {
                  $s = "select User_Name, Requested from connection where (User_Name = '$UN' and Requested = '$TUN' and Accepted = 'NO') or (Requested = '$UN' and User_Name = '$TUN' and Accepted = 'NO')";
                  $result1 = mysqli_query($con, $s);
                  $num = mysqli_num_rows($result1);
                  if ($num == 1) {
                    echo "<button type='submit' class='btn btn-danger float-left act' style='position:absolute;top:24px;right:10px; font-size:13.5px' name = 'DisconectButton' value = '$TUN'><i class='fa fa-times' aria-hidden='true'></i> Cancel Request</button>";
                  }
                  else {
                    echo "<button type='submit' class='btn btn-primary float-left act' style='position:absolute;top:24px;right:10px;' name = 'ConnectButton' value = '$TUN'><i class='fa fa-paperclip' aria-hidden='true'></i> Connect</button>";
                  }
                }
              }
              $TUNN = $TUN.'N';
              echo "
                <button type='submit' name='Search_Profile' id='$TUNN' hidden value='$TUN'></button>
                <script type='text/javascript'>
                  document.getElementById('$TUN').onclick = function () {
                    document.getElementById('$TUNN').click();
                  }
                </script>
              </div>
            </form>
          </div>
              ";
      }
    }

    $s = "select User_Name, Name, Designation, Profile_Picture from users where Name LIKE '%$Search%'";
    $result = mysqli_query($con, $s);
    while ($ROW = mysqli_fetch_array($result)) {
      $TUN = $ROW['User_Name'];
      if (!in_array($TUN,$arr)) {
        array_push($arr, $TUN);
        $TN = $ROW['Name'];
        $TPP = $ROW['Profile_Picture'];
        $TDesignation = $ROW['Designation'];
        if ($TPP == "") {
          $TPP = "bk_images/avatar-male.png";
        }
        echo "
        <div class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center'>
          <form class='col-lg-6 col-md-6 p-2 bg-white search' action='Connection Requested.php' method='post'>
            <div class='profile' id='$TUN'>
              <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px; cursor:pointer'>
              <div class='bio'>
                <h4><span style='color:#007bff; cursor: pointer'>$TN</span></h4>
                <h4 style='font-size:18px; cursor: pointer'><span>$TDesignation</span></h4>
              </div>
              ";
              if ($TN != $N) {
                $s = "select User_Name, Requested from connection where (User_Name = '$UN' and Requested = '$TUN' and Accepted = 'YES') or (Requested = '$UN' and User_Name = '$TUN' and Accepted = 'YES')";
                $result1 = mysqli_query($con, $s);
                $num = mysqli_num_rows($result1);
                if ($num == 1) {
                  echo "<button disabled type = 'button' class='btn btn-primary act float-left' style='position:absolute;top:24px;right:10px; font-size:14px; background: #4caf50; opacity: 1; border: 1px solid #5db761;' ><i class='fa fa-connectdevelop' aria-hidden='true'></i> Connected</button>";
                }
                else {
                  echo "<button type='submit' class='btn btn-primary float-left act' style='position:absolute;top:24px;right:10px;' name = 'ConnectButton' value = '$TUN'><i class='fa fa-paperclip' aria-hidden='true'></i> Connect</button>";
                }
              }
              $TUNN = $TUN.'N';
              echo "
                <button type='submit' name='Search_Profile' id='$TUNN' hidden value='$TUN'></button>
                <script type='text/javascript'>
                  document.getElementById('$TUN').onclick = function () {
                    document.getElementById('$TUNN').click();
                  }
                </script>
              </div>
            </form>
          </div>
              ";
      }
    }

    $s = "select User_Name, Name, Designation, Profile_Picture from users where Name LIKE '%$Search'";
    $result = mysqli_query($con, $s);
    while ($ROW = mysqli_fetch_array($result)) {
      $TUN = $ROW['User_Name'];
      if (!in_array($TUN,$arr)) {
        array_push($arr, $TUN);
        $TN = $ROW['Name'];
        $TPP = $ROW['Profile_Picture'];
        $TDesignation = $ROW['Designation'];
        if ($TPP == "") {
          $TPP = "bk_images/avatar-male.png";
        }
        echo "
        <div class='col-lg-12 col-md-12 col-sm-12 m-2 d-flex justify-content-center'>
          <form class='col-lg-6 col-md-6 p-2 bg-white search' action='Connection Requested.php' method='post'>
            <div class='profile' id='$TUN'>
              <img src='$TPP' alt='' class='rounded-circle float-left' style='width:70px;height:70px; cursor:pointer'>
              <div class='bio'>
                <h4><span style='color:#007bff; cursor: pointer'>$TN</span></h4>
                <h4 style='font-size:18px; cursor: pointer'><span>$TDesignation</span></h4>
              </div>
              ";
              if ($TN != $N) {
                $s = "select User_Name, Requested from connection where (User_Name = '$UN' and Requested = '$TUN' and Accepted = 'YES') or (Requested = '$UN' and User_Name = '$TUN' and Accepted = 'YES')";
                $result1 = mysqli_query($con, $s);
                $num = mysqli_num_rows($result1);
                if ($num == 1) {
                  echo "<button disabled type = 'button' class='btn btn-primary act float-left' style='position:absolute;top:24px;right:10px; font-size:14px; background: #4caf50; opacity: 1; border: 1px solid #5db761;' ><i class='fa fa-connectdevelop' aria-hidden='true'></i> Connected</button>";
                }
                else {
                  echo "<button type='submit' class='btn btn-primary float-left act' style='position:absolute;top:24px;right:10px;' name = 'ConnectButton' value = '$TUN'><i class='fa fa-paperclip' aria-hidden='true'></i> Connect</button>";
                }
              }
              $TUNN = $TUN.'N';
              echo "
                <button type='submit' name='Search_Profile' id='$TUNN' hidden value='$TUN'></button>
                <script type='text/javascript'>
                  document.getElementById('$TUN').onclick = function () {
                    document.getElementById('$TUNN').click();
                  }
                </script>
              </div>
            </form>
          </div>
              ";
      }
    }
     ?>
  </div>
</div>
</body>
</html>
