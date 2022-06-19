<?php include 'Backend Modules/Edit Profile.php';?>
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
  <!--Style Sheet for homepage font family-->
  <link href="https://fonts.googleapis.com/css?family=Abel|Barlow+Semi+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css\menu.css">
  <style>
  *{

  }
  .footer {
    position: relative;
    background: linear-gradient(135deg, #e079fc 0%, #7c44ff 100%);
    top:6vh;
  }
  .footer a {
    color: white;
    text-decoration: none;
  }
  </style>

</head>

<body style="background-color: #f5f8fa; padding-bottom: 50px;">
  <?php include 'modules/user-menu.php';?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 d-flex justify-content-center">
        <div class="col-lg-6 col-md-6">
          <div class="editprofile" style="border:1px solid #7c44ff;padding:4%;margin-top:10%;border-radius:5px;">
            <form action="Update Profile.php" method="POST">
              <h4 class="text-center pb-3">Edit Profile</h4>
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Want to update Name" name="Name" value="<?php echo htmlentities($N); ?>" required>
              </div>
              <div class="form-group">
                <input disabled type="text" class="form-control" id="User Name" placeholder="Enter User Name" value="<?php echo htmlentities($UN); ?>" required>
              </div>
              <div class="form-group">
                <input type="date" class="form-control" id="birthday" placeholder="Birthday" name="DOB" value="<?php echo htmlentities($D); ?>" required>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="Phone_Number" value="<?php echo htmlentities($P); ?>" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="bio" placeholder="Enter few lines about yourself." name="About" value="<?php echo htmlentities($A); ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="lives-in" placeholder="Lives in" name="Lives_in" value="<?php echo htmlentities($LI); ?>">
              </div>
              <div class="form-group">
                <input disabled type="text" class="form-control" id="studying-in" placeholder="Studying in" value="<?php echo htmlentities($SI); ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="went-to" placeholder="Went to" name="Went_to" value="<?php echo htmlentities($WT); ?>">
              </div>
              <div class=" d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
