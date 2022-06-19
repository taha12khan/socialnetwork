<?php include 'Backend Modules/Profile.php'; ?>
<?php include 'Backend Modules/Notice.php'; ?>
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
</head>
<body>
  <?php include 'modules/user-menu.php';?>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-12 col-md-12 d-flex justify-content-center">
        <div class="col-lg-6 col-md-6">
        <div class="heading">
        <h3>Welcome to Notice Board Updater</h3>
        </div>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 d-flex justify-content-center">
        <div class="col-lg-6 col-md-6">
          <div class="ins">
            <h4>Instruction</h4>
            <ul>
              <li>Only 4 Notice can be made visible.</li>
              <li>You can update the Specific Notice by Entering the data at that place</li>
            </ul>
          </div>

        </div>
      </div>
      <div class="col-lg-12 col-md-12  d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 ">
        <form action="Update Notice.php" method="post">
          <!--Form Starts here-->
          <div class="form-group">
            <span>Update First Notice</span>
            <input type="text" class="form-control" id="name" value="<?php echo $Notice_1; ?>" placeholder="Update First Notice" name="Notice_1">
          </div>
          <div class="form-group">
            <span>Update Second Notice</span>
            <input type="text" class="form-control" id="name" value="<?php echo $Notice_2; ?>" placeholder="Update Second Notice" name="Notice_2">
          </div>
          <div class="form-group">
            <span>Update Third Notice</span>
            <input type="text" class="form-control" id="name" value="<?php echo $Notice_3; ?>" placeholder="Update Third Notice" name="Notice_3">
          </div>
          <div class="form-group">
            <span>Update Fourth Notice</span>
            <input type="text" class="form-control" id="name" value="<?php echo $Notice_4; ?>" placeholder="Update Fourth Notice" name="Notice_4">
          </div>
          <button type="submit" class="btn btn-primary">Update Notice Board</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
