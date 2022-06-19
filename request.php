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
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center mt-3 ">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
       <h5><span style="color:red;">Connection Request</span></h5>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-1">
        <div class="col-lg-6 col-md-6 p-2 bg-white req">
          <div class="profile">
            <img src="bk_images/avatar-male.png" alt="" class="rounded-circle float-left" style="width:70px;height:70px;">
            <div class="bio">
              <a href="#"><h4><span>Shadab Jabbar</span></h4></a>
              <div class="req-btn">
                <button type="button" class="btn btn-primary btn-sm">Accept</button>
                <button type="button" class="btn btn-danger btn-sm">Reject</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
