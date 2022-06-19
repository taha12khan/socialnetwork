<?php
include 'Backend Modules/Profile.php';
if (!($Designation == "Teacher" or $Designation == "Developer" or $Designation == "Student")) {
  header('location: Home.php');
}
else {
  include 'Backend Modules/Connection.php';
  $R = $_POST['Roll_Number'];
  $T = $_POST['Type'];
  if ($T == 'Odd') {
    $s = "select * from odd20192020 where Roll_Number = '$R'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
  }
  if ($T == 'Even') {
    $s = "select * from even20192020 where Roll_Number = '$R'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
  }
  if ($num == 1) {
    $Result = "<!DOCTYPE html>
    <html lang='' dir='ltr'>
      <head>
        <title>$N - BCB Social Network</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
        <!--Style Sheet for homepage font family-->
        <link href='https://fonts.googleapis.com/css?family=Abel|Barlow+Semi+Condensed&display=swap' rel='stylesheet'>
        <link rel='stylesheet' href='css/menu.css'>
        <style>
          @media only screen and (max-width: 600px) {
            .container {
              width: 98%;
              padding: 0;
            }
          @media only screen and (max-width: 400px) {
            .container {
              font-size: 3.5vw;
              }
        </style>
      </head>";
    echo $Result;

    include 'modules/user-menu.php';

    $result = mysqli_fetch_array($result);
    $N = $result['Name'];
    $F = $result['Fathers_Name'];
    $M = $result['Mothers_Name'];
    $E = $result['Enrollment_Number'];
    $C = $result['Course'];
    $Ca = $result['Category'];
    $CN = $result['College_Name'];
    $ETY = $result['Exam_Type_Year'];
    $SC1 = $result['Subject1_Code'];
    $SC2 = $result['Subject2_Code'];
    $SC3 = $result['Subject3_Code'];
    $SC4 = $result['Subject4_Code'];
    $SC5 = $result['Subject5_Code'];
    $SC6 = $result['Subject6_Code'];
    $SC7 = $result['Subject7_Code'];
    $S1 = $result['Subject1'];
    $S2 = $result['Subject2'];
    $S3 = $result['Subject3'];
    $S4 = $result['Subject4'];
    $S5 = $result['Subject5'];
    $S6 = $result['Subject6'];
    $S7 = $result['Subject7'];
    $I1 = $result['Internal1'];
    $I2 = $result['Internal2'];
    $I3 = $result['Internal3'];
    $I4 = $result['Internal4'];
    $I5 = $result['Internal5'];
    $E1 = $result['External1'];
    $E2 = $result['External2'];
    $E3 = $result['External3'];
    $E4 = $result['External4'];
    $E5 = $result['External5'];
    $E6 = $result['External6'];
    $E7 = $result['External7'];
    $T1 = $result['Total1'];
    $T2 = $result['Total2'];
    $T3 = $result['Total3'];
    $T4 = $result['Total4'];
    $T5 = $result['Total5'];
    $T6 = $result['Total6'];
    $T7 = $result['Total7'];
    $Sem1 = $result['Sem1'];
    $Sem2 = $result['Sem2'];
    $Sem3 = $result['Sem3'];
    $Sem4 = $result['Sem4'];
    $TM = $result['Total_Marks'];
    $Re = $result['Result'];
    $GT = $result['Grant_Total'];
    $D = $result['Division'];

    $Result = "
    <body>
      <div class='container'>
      <table class='table  table-bordered'>
        <h3>Personal Details</h3>
        <tr>
          <td>Roll Number</td>
          <td>Roll_Number</td>
        </tr>
        <tr>
          <td>Name</td>
          <td>Name_</td>
        </tr>
        <tr>
          <td>Father's Name</td>
          <td>Fathers_Name</td>
        </tr>
        <tr>
          <td>Mother's Name</td>
          <td>Mothers_Name</td>
        </tr>
        <tr>
          <td>Enrollment No.</td>
          <td>Enrollment_Number</td>
        </tr>
        <tr>
          <td>Course</td>
          <td>Course_</td>
        </tr>
        <tr>
          <td>Categary</td>
          <td>Category_</td>
        </tr>
        <tr>
          <td>College Name</td>
          <td>College_Name</td>
        </tr>
        <tr>
          <td>Exam Type/Year</td>
          <td>Exam_Type_Year</td>
        </tr>
      </table>
      <table class='table  table-bordered'>
        <h3>Marks Details</h3>
        <tr>
          <th>Subject</th>
          <th>Paper Code</th>
          <th>External</th>
          <th>Internal</th>
          <th>Total</th>
        </tr>
        <tr>
          <td>Subject1</td>
          <td>Subject1_Code</td>
          <td>External1</td>
          <td>Internal1</td>
          <td>Total1</td>
        </tr>
        <tr>
          <td>Subject2</td>
          <td>Subject2_Code</td>
          <td>External2</td>
          <td>Internal2</td>
          <td>Total2</td>
        </tr>
        <tr>
          <td>Subject3</td>
          <td>Subject3_Code</td>
          <td>External3</td>
          <td>Internal3</td>
          <td>Total3</td>
        </tr>
        <tr>
          <td>Subject4</td>
          <td>Subject4_Code</td>
          <td>External4</td>
          <td>Internal4</td>
          <td>Total4</td>
        </tr>
        <tr>
          <td>Subject5</td>
          <td>Subject5_Code</td>
          <td>External5</td>
          <td>Internal5</td>
          <td>Total5</td>
        </tr>
        <tr>
          <td>Subject6</td>
          <td>Subject6_Code</td>
          <td>External6</td>
          <td></td>
          <td>Total6</td>
        </tr>
        <tr>
          <td>Subject7</td>
          <td>Subject7_Code</td>
          <td>External7</td>
          <td></td>
          <td>Total7</td>
        </tr>
        <tr>
          <td>1 sem/year</td>
          <td></td>
          <td></td>
          <td></td>
          <td>Sem1</td>
        </tr>
        <tr>
          <td>2 sem/year</td>
          <td></td>
          <td></td>
          <td></td>
          <td>Sem2</td>
        </tr>
        <tr>
          <td>3 sem/year</td>
          <td></td>
          <td></td>
          <td></td>
          <td>Sem3</td>
        </tr>
        <tr>
          <td>4 sem/year</td>
          <td></td>
          <td></td>
          <td></td>
          <td>Sem4</td>
        </tr>
      </table>
      <table class='table  table-bordered'>
        <h3>Result Details</h3>
        <tr>
          <td>Total Marks</td>
          <td>Total_Marks</td>
      </tr>
      <tr>
        <td>Result</td>
        <td>Result_</td>
      </tr>
      <tr>
        <td>Division</td>
        <td>Division_</td>
      </tr>
      <tr>
        <td>Grand Total</td>
        <td>Grand_Total</td>
      </tr>
      </table>
    </div>
    </body>";
    $Result = str_replace("Roll_Number","$R",$Result);
    $Result = str_replace("Name_","$N",$Result);
    $Result = str_replace("Fathers_Name","$F",$Result);
    $Result = str_replace("Mothers_Name","$M",$Result);
    $Result = str_replace("Enrollment_Number","$E",$Result);
    $Result = str_replace("Course_","$C",$Result);
    $Result = str_replace("Category_","$Ca",$Result);
    $Result = str_replace("College_Name","$CN",$Result);
    $Result = str_replace("Exam_Type_Year","$ETY",$Result);
    $Result = str_replace("Subject1_Code","$SC1",$Result);
    $Result = str_replace("Subject2_Code","$SC2",$Result);
    $Result = str_replace("Subject3_Code","$SC3",$Result);
    $Result = str_replace("Subject4_Code","$SC4",$Result);
    $Result = str_replace("Subject5_Code","$SC5",$Result);
    $Result = str_replace("Subject6_Code","$SC6",$Result);
    $Result = str_replace("Subject7_Code","$SC7",$Result);
    $Result = str_replace("Subject1","$S1",$Result);
    $Result = str_replace("Subject2","$S2",$Result);
    $Result = str_replace("Subject3","$S3",$Result);
    $Result = str_replace("Subject4","$S4",$Result);
    $Result = str_replace("Subject5","$S5",$Result);
    $Result = str_replace("Subject6","$S6",$Result);
    $Result = str_replace("Subject7","$S7",$Result);
    $Result = str_replace("Internal1","$I1",$Result);
    $Result = str_replace("Internal2","$I2",$Result);
    $Result = str_replace("Internal3","$I3",$Result);
    $Result = str_replace("Internal4","$I4",$Result);
    $Result = str_replace("Internal5","$I5",$Result);
    $Result = str_replace("External1","$E1",$Result);
    $Result = str_replace("External2","$E2",$Result);
    $Result = str_replace("External3","$E3",$Result);
    $Result = str_replace("External4","$E4",$Result);
    $Result = str_replace("External5","$E5",$Result);
    $Result = str_replace("External6","$E6",$Result);
    $Result = str_replace("External7","$E7",$Result);
    $Result = str_replace("Total1","$T1",$Result);
    $Result = str_replace("Total2","$T2",$Result);
    $Result = str_replace("Total3","$T3",$Result);
    $Result = str_replace("Total4","$T4",$Result);
    $Result = str_replace("Total5","$T5",$Result);
    $Result = str_replace("Total6","$T6",$Result);
    $Result = str_replace("Total7","$T7",$Result);
    $Result = str_replace("Sem1","$Sem1",$Result);
    $Result = str_replace("Sem2","$Sem2",$Result);
    $Result = str_replace("Sem3","$Sem3",$Result);
    $Result = str_replace("Sem4","$Sem4",$Result);
    $Result = str_replace("Total_Marks","$TM",$Result);
    $Result = str_replace("Result_","$Re",$Result);
    $Result = str_replace("Grand_Total","$GT",$Result);
    $Result = str_replace("Division_","$D",$Result);
    echo $Result;
  }
  else {
    $_SESSION['Choice'] = 13;
    header('location: Exam Results.php');
  }
}
 ?>
