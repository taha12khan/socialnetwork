<?php include 'Backend Modules/Profile.php'; ?>
<?php if ($Designation != "Teacher" and $Designation != "Developer") {
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
    @media screen and (max-width:280px) {
      .button{
        flex-direction: column!important;
      }
    }
  </style>
</head>
<body>
  <?php include 'modules/user-menu.php';?>
  <div class="container mt-2">
    <div class="button d-flex justify-content-between ">
      <button type="button" class="btn btn-outline-primary m-1" id="request">Request</button>
      <button type="button" class="btn btn-outline-primary m-1" id="posts">Post</button>
      <button type="button" class="btn btn-outline-primary m-1" id="users">Users</button>
    </div>

    <div class="request" id="request-table">
      <div class="info">
            <div class="heading text-center">
              <h3><i class="fa fa-users"></i> Request Center</h3>
            </div>
      </div>
      <div class="table-responsive mt-2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Date/Time Added</th>
              <th>User Role</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $s = "select * from users where Accepted = 'NO'";
            $result = mysqli_query($con, $s);
            while ($row = mysqli_fetch_array($result)) {
              $TN = $row['Name'];
              $TE = $row['Email'];
              $TD = $row['Designation'];
              $TD = substr($TD, 13);
              if ($TD == "Student") {
                $TY = $row['Year'];
                $TD = $TD." Year - ".$TY;
              }
              $TDate = $row['Date_of_Creation'];
              $TTime = $row['Time_of_Creation'];
              $TUN = $row['User_Name'];
              echo "
              <tr>
                <td>$TN</td>
                <td>$TE</td>
                <td>$TDate / $TTime</td>
                <td>$TD</td>
                <td>
                <form action='Admin.php' method='post'>
                  <button type='submit' class='btn btn-primary m-1' name = 'Approve' value = '$TUN'>Approve</button>
                  <button type='submit' class='btn btn-danger m-1' name = 'Reject' value = '$TUN'>Reject</button>
                </form>
                </td>
              </tr>
              ";
            }
             ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="post" id='posts-table'>
      <div class="info">
        <div class="heading text-center">
          <h3><i class="fa fa-users"></i> User's Post</h3>
        </div>
      </div>
      <div class="table-responsive mt-2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Post</th>
              <th>User Role</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $s = "select * from posts where Accepted = 'NO'";
            $posts = mysqli_query($con, $s);
            while ($row = mysqli_fetch_array($posts)) {
              $NUM = $row['Number'];
              $TUN = $row['User_Name'];
              $Post = $row['Post'];
              $s = "select Name, Designation, Year from users where User_Name = '$TUN'";
              $user = mysqli_query($con, $s);
              $row_user= mysqli_fetch_array($user);
              $TN = $row_user['Name'];
              $TD = $row_user['Designation'];
              if ($TD == "Student") {
                $TY = $row_user['Year'];
                $TD = $TD." Year - ".$TY;
              }
              echo "
              <tr>
                <td>$TN</td>
                <td>$Post</td>
                <td>$TD</td>
                <td>
                <form action='Admin.php' method='post'>
                  <button type='submit' class='btn btn-primary m-1' name = 'Approve-Post' value = '$NUM'>Approve</button>
                  <button type='submit' class='btn btn-danger m-1' name = 'Reject-Post' value = '$NUM'>Reject</button>
                </form>
                </td>
              </tr>
              ";
            }
             ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="users" id="users-table">
      <div class="info">
        <div class="heading text-center">
          <h3><i class="fa fa-users"></i> Total Users in BCB</h3>
        </div>
      </div>
      <div class="table-responsive mt-2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>User Role</th>
              <th class="text-center">Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $s = "SELECT Name, User_Name, Study from users where Designation = 'Student' ORDER BY Name";
            $result = mysqli_query($con, $s);
            while ($row = mysqli_fetch_array($result)) {
              $TN = $row['Name'];
              $TSI = $row['Study'];
              $TUN = $row['User_Name'];
              echo "
              <tr>
                <td>$TN</td>
                <td>$TSI</td>
                <td>
                <form class='d-flex flex-column' action='Admin.php' method='post'>
                  <button type='submit' class='btn btn-danger m-1' value='$TUN' name='Remove'>Remove</button>
                </form>
                </td>
              </tr>
              ";
            }
             ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  document.getElementById('posts-table').style.display = "none";
  document.getElementById('users-table').style.display = "none";

    document.getElementById('request').onclick = function() {
      document.getElementById('request-table').style.display = "block";
      document.getElementById('posts-table').style.display = "none";
      document.getElementById('users-table').style.display = "none";
    }

    document.getElementById('posts').onclick = function() {
      document.getElementById('request-table').style.display = "none";
      document.getElementById('posts-table').style.display = "block";
      document.getElementById('users-table').style.display = "none";
    }

    document.getElementById('users').onclick = function() {
      document.getElementById('request-table').style.display = "none";
      document.getElementById('posts-table').style.display = "none";
      document.getElementById('users-table').style.display = "block";
    }
  </script>
</body>
</html>
