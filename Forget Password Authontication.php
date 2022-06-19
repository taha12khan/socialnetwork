<?php
session_start();

if(isset($_SESSION['Check'])) {
  //echo "Me";
}

elseif(!isset($_POST['SubmitEmail'])){
  header('location: index.php');
}

else {
  $r = rand(100000,1000000);
  $_SESSION['Random'] = $r;
  $E = $_POST['Email'];
  $_SESSION['Email'] = $E;
  include 'Backend Modules/Connection.php';
  $s = "select * from users where Email = '$E'";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $to = $E;
    $subject = "OTP Authentication from BCB Social Network";
    $message = "This mail has been sent to you because a request has been generated to create a new password for account ".$E." on BCB Social Network. If you have'nt done this, just ignore this Email. OTP is ".$r;
    $headers = "From: mratunjya@collegesocialnetwork.edu";
    mail($to, $subject, $message, $headers);
  }
  else {
    $_SESSION['Choice'] = 8;
    header('location: Forget Password.php');
  }
}
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta http-equiv='x-ua-compatible' content='ie=edge'>
  <!--Style Sheet for bootstrap-4-->
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
  <!--Style Sheet for homepage font awsome-->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <!--Style Sheet for homepage except image hover effect-->
  <link rel='stylesheet' href='css/index.css'>
  <!--Style Sheet for image hover effect-->
  <link rel='stylesheet' href='css/team.css'>
  <!--Style Sheet for homepage font family-->
  <link href='https://fonts.googleapis.com/css?family=Abel|Barlow+Semi+Condensed&display=swap' rel='stylesheet'>
  <!--Title goes here-->
  <title>BCB Social Network</title>
</head>

<body>
  <!--Container Fluid Start here-->
  <div class='container-fluid'>
    <!--Title and logo of website -->
    <div class='row text-black info'>
      <div class='col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center'>
        <i class='fa fa-graduation-cap fa-5x' style='font-size:7vw;' aria-hidden='true'></i>
        <h1 style='font-size:7vw;'>BCB Social Network</h1>
      </div>
    </div>
    <!--Banner of Sign Up Section-->
    <div class='row sign-in p-2'>
      <div class='col-lg-12 col-md-12 col-sm-12 text-center'>
        <h4>Sign in now and see what is going on in BCB Social Network!</h4>
        <h4>Not Registered Yet!</h4>
        <a href='index.php' class='btn btn-primary'>Sign Up</a>
      </div>
    </div>
    <!--Row Section of sign in form start-->
    <div class='row sign-up'>
      <!--Coulmn of 12 span Section-->
      <div class='col-lg-12 col-md-12 d-flex justify-content-center'>
        <!--Coulmn of 6 span Section to make it center-->
        <div class='col-lg-6 col-md-6 shadow p-4 mt-2 mb-4 bg-white login-form'>
          <h4>Confirming your credentitals are correct </h4>
          <?php
          if(isset($_SESSION['Choice'])) {
            if($_SESSION['Choice'] == 9) {
              echo '<div class="alert alert-danger">
              <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> OTP is incorrect! </strong> Retry
              </div>';
            }
          }
           ?>
          <br>
          <form action='Check.php' method='POST'>
            <!--Form Starts here-->
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text'><i class='fa fa-mobile' aria-hidden='true'></i></span>
              </div>
              <input type='password' class='form-control' id='email' placeholder='Enter the otp send to your Email Address' name='OTP' required>
            </div>
            <button type='submit' class='btn btn-primary' name="ForgetPasswordAuthontication">Submit</button>
          </form>
          <!--Form End Here-->
        </div>
        <!--Coulmn of 6 span Section to make it center Ends here-->
      </div>
      <!--Coulmn of 12 span Section Ends Here-->
    </div>
    <!--Row Section of sign in form End-->
    <?php include 'modules/team.php';?>
    <!--Author in Container tag End Here-->
    <!--Footer Starts Here-->
    <?php include 'modules/footer.php';?>
    <!--Footer Ends Here-->
  </div>
  <!--Container Fluid Ends here-->
</body>

</html>
