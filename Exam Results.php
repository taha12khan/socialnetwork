<?php include 'Backend Modules/Profile.php' ?>
<?php if (!($Designation == "Teacher" or $Designation == "Developer" or $Designation == "Student")) {
  header('location: Home.php');
}
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
  </head>

  <body>
    <?php include 'modules/user-menu.php';?>
    <div class="container-fluid pt-3">
    <h2 style="color:purple;text-align:center;">RESULT</h2>
    <div class="row sign-up">
      <div class="col-lg-12 col-md-12 d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 shadow p-4 mt-2 mb-4 bg-white login-form">
          <div class="form-group">
            <?php
            if(isset($_SESSION['Choice'])){
              if($_SESSION['Choice'] == 13){
                echo '<div class="alert alert-info">
                  <strong><i class="fa fa-book" aria-hidden="true"></i> No Record Found! </strong>
                </div>';
                unset($_SESSION['Choice']);
              }
            }
             ?>
            <label for="usr">Enter Roll No.</label>
            <form action="Result.php" method="post">
              <input class="form-control" id="usr" name="Roll_Number" required>
              <br>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="customRadio" name="Type" value="Even" required>
                  <label class="custom-control-label" for="customRadio">Even Semster</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="customRadio2" name="Type" value="Odd" required>
                  <label class="custom-control-label" for="customRadio2">Odd Semster</label>
                </div>
              </div>
              <button type="submit" name="FindResult" class="btn btn-primary btn-block">Find Result</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
