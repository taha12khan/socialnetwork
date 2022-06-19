<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!--Style Sheet for bootstrap-4-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--Style Sheet for homepage font awsome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!--Style Sheet for homepage except image hover effect-->
  <link rel="stylesheet" href="css/index.css">
  <!--Style Sheet for image hover effect-->
  <link rel="stylesheet" href="css/team.css">
  <!--Style Sheet for homepage font family-->
  <link href="https://fonts.googleapis.com/css?family=Abel|Barlow+Semi+Condensed&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!--Title goes here-->
  <title>BCB Social Network</title>
</head>

<body>
  <!--Starting Website Container-fluid-->
  <div class="container-fluid">
    <!--Title and logo of website -->
    <div class="row text-black info">
      <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
        <i class="fa fa-graduation-cap fa-5x" style="font-size:7vw;" aria-hidden="true"></i>
        <h1 style="font-size:7vw;">BCB Social Network</h1>
      </div>
    </div>
    <!--Banner of Sign in Section-->
    <div class="row sign-in p-2">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h4>Sign in now and see what is going on in BCB Social Network!</h4>
        <h4>Already have account!</h4>
        <a href="sign%20in.php" class="btn btn-primary">Sign In</a>
      </div>
    </div>
    <!--Banner of Sign up and Photo Section Section-->
    <div class="row sign-up m-2">
      <!--Column of Photo Section Section-->
      <div class="col-lg-6 col-md-6">
        <h4>BCB Helps you to connect through all the college Buddies and faculty.</h4>
        <h4>BCB Helps you to increase your productivity and your skill to show case to others.</h4>
        <img src="logo/logo.png" class="rounded-circle d-block mx-auto" alt="Logo">
      </div>
      <!--Column of Sign up Section-->
      <div class="col-lg-6 col-md-6 shadow p-4 mt-2 mb-4 bg-white login-form">
        <?php include 'Backend Modules/index.php'; ?>
        <h4>Create an Account now</h4>
        <p>It's simple and free.</p>
        <!--Form Section-->
        <form action="Registration Details.php" method="POST">
          <!--Form Starts here-->
          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Name" name="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="User Name (It should be unique)" name="User_Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email" name="Email" required>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="p-number" placeholder="Phone Number" name="Phone_Number" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="pwd" placeholder="Password" name="Password1" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="pwd" placeholder="Confirm Password" name="Password2" required>
          </div>
          <div class="form-group">
            <p>Date of Birth</p>
            <input type="date" class="form-control" id="dob" name="DOB" required>
          </div>
          <div class="form-group">
            <p>Gender</p>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio" name="Gender" value="Male" required>
              <label class="custom-control-label" for="customRadio">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio2" name="Gender" value="Female" required>
              <label class="custom-control-label" for="customRadio2">Female</label>
            </div>
          </div>
          <br>
          <div class="form-group">
            <p>Designation &#8212;</p>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio3" name="Designation" value="Student1" required>
              <label class="custom-control-label" for="customRadio3">Student 1<sup>st</sup> Year</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio32" name="Designation" value="Student2" required>
              <label class="custom-control-label" for="customRadio32">Student 2<sup>nd</sup> Year</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio33" name="Designation" value="Student3" required>
              <label class="custom-control-label" for="customRadio33">Student 3<sup>rd</sup> Year</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio4" name="Designation" value="Teacher" required>
              <label class="custom-control-label" for="customRadio4">Teacher</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
        </form>
        <!--Column of Sign up Section End here-->
      </div>
      <!--Row End here-->
    </div>

    <?php include 'modules/team.php';?>
    <!--Author Container End Here-->
    <!--Footer Section Starts Here-->
    <?php include 'modules/footer.php';?>
    <!--Footer Section Ends Here-->
  </div>
  <!--Container Fluid Ends Here-->
</body>
</html>
