<?php include 'Backend Modules/Profile.php'; ?>
<?php if (!($Designation != "Teacher" or $Designation != "Developer")) {
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
</head>
<body>
<?php include 'modules/user-menu.php';?>
<div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-12 col-md-12 d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 shadow p-4 mt-2 mb-4 bg-white login-form" style="border-radius:10px;">
          <form action="Send Notification.php" method="get">
            <h4>Send Notification to all Student</h4>
            <div class="form-group">
              <label for="text">Notification Title</label>
              <input type="text" class="form-control" placeholder="Enter Title" id="text" style="outline:none;" name="Title">
            </div>
            <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio1" name="Whom" value="1" required>
                <label class="custom-control-label" for="customRadio1">I<sup>st</sup> Year</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio2" name="Whom" value="2" required>
                <label class="custom-control-label" for="customRadio2">II<sup>nd</sup> Year</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio3" name="Whom" value="3" required>
                <label class="custom-control-label" for="customRadio3">III<sup>rd</sup> Year</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio4" name="Whom" value="4" required>
                <label class="custom-control-label" for="customRadio4">All Students</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio5" name="Whom" value="5" required>
                <label class="custom-control-label" for="customRadio5">All</label>
              </div>
            </div>
            <div class="form-group">
              <label for="text1">Description:</label>
              <textarea name="Description" class="p-2" rows="" cols="" style="width:100%;height:150px;resize:none;border-radius:10px;outline:none;" placeholder="Type the message you want to send to Students"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="NotificationAdmin">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
