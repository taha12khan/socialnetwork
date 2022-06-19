<?php include 'Backend Modules/Profile.php'; ?>
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
    <style>
    body{
      background-color: white;
    }

    .sem:hover{
      box-shadow: 10px 6px 9px rgba(0,0,0,.12), 10px 6px 9px rgba(0,0,0,.24);
      transition: all .2s ease-in-out;
      color:blue;
    }

    @media screen and (max-width:767px) {
      .sub{
        margin-left: .5rem!important;
      }

    }
    </style>
  </head>
  <body>
    <?php include 'modules/user-menu.php';?>
    <div class="container">
      <div class="row m-2 d-flex justify-content-center text-center">
        <div class="col-lg-12">
          <h3>Subject</h3>
        </div>
      </div>
      <div class="row m-2 d-flex justify-content-center text-center">
        <div class="col-lg-3 col-md-3 m-2 border p-4 mb-4 sem d-flex align-items-center justify-content-center">
          <a href="#" style="text-decoration:none;">
            <img src="icon/vb.png" alt="" style="width:80px;height:80px;">
           <h4 style="color:black">Visual Basic</h4>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 m-2 border p-4 mb-4 sem d-flex align-items-center justify-content-center">
          <a href="#" style="text-decoration:none;">
            <img src="icon/database.png" alt="" style="width:80px;height:80px;">
           <h4 style="color:black">DBMS</h4>
          </a>
        </div>
        <div class="col-lg-3 col-md-3 m-2 border p-4 mb-4 sem d-flex align-items-center justify-content-center">
          <a href="#" style="text-decoration:none;">
            <img src="icon/cao.png" alt="" style="width:80px;height:80px;">
           <h4 style="color:black">System Analysis Design</h4>
          </a>
        </div>
      </div>
      <div class="row m-2 d-flex justify-content-center text-center">
        <div class="col-lg-4 col-md-4 m-2 border p-4 mb-4 sem d-flex align-items-center justify-content-center sub">
          <a href="#" style="text-decoration:none;">
            <img src="icon/os.png" alt="" style="width:80px;height:80px;">
           <h4 style="color:black">Operating System</h4>
          </a>
        </div>
        <div class="col-lg-5 col-md-5 m-2 ml-4 border p-4 mb-4 sem d-flex align-items-center justify-content-center">
          <a href="#" style="text-decoration:none;">
            <img src="icon/people.png" alt="" style="width:80px;height:80px;">
           <h4 style="color:black">Management Information System</h4>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
