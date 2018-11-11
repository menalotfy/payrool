<?php
  include("auth.php"); 
  include("add_employee.php");
?>

<?php

  $conn = mysql_connect('localhost', 'root', '');
  if (!$conn)
  {
    die("Database Connection Failed" . mysql_error());
  }

  $select_db = mysql_select_db('payroll');
  if (!$select_db)
  {
    die("Database Selection Failed" . mysql_error());
  }

  $query  = mysql_query("SELECT * from deductions");
  while($row=mysql_fetch_array($query))
  {
    $id           = $row['deduction_id'];
    $insHealth   = $row['insHealth'];
    $taxes          = $row['taxes'];
    $gsis         = $row['gsis'];
    $abs        = $row['abs'];
    $loans        = $row['loans'];

    $total        = $insHealth + $taxes + $gsis + $abs+ $loans;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
   
    <title></title>

    <script>
      <!--
        var ScrollMsg= "Payroll and Management System - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
      // -->
    </script>

    <link href="assets/must.png" rel="shortcut icon">
    <link href="assets/css/justified-nav.css" rel="stylesheet">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/search.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.min.css">

  </head>
  <body>

    <div class="container">
      <div class="masthead">
        <h3>
          <b>Payroll and Management System</b>
            <a data-toggle="modal" href="#colins" class="pull-right"><b><?php echo $_SESSION['username']; ?></b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="home_employee.php">Employee</a></li>
            <li><a href="home_deductions.php">Deduction/s</a></li>
            <li><a href="home_salary.php">Income</a></li>
          </ul>
        </nav>
      </div><br>
      <div class="jumbotron">
        <h1>PAYROLL</h1>
        <p class="lead btn btn-info" style="color: black">The Payroll and Management System was created by our teaam <br> 1-mena lotfy <br> 2- botros adel <br>3- keroles saad <br>4- martina yousef </p>
        <p><a data-toggle="modal" class="btn btn-lg btn-success" href="#instructor" role="button">supervisied </a></p>
      </div>
<footer class="footer">
        <p align="center">&copy; All Rights Reserved 2018</p>
        <p align="center">Copyright by <a target="_blank" href="http://www.must.edu.ph" data-show-count="true">faculty of computers and information system </a></p>
        <p align="center">About the <a target="_blank" href="http://www.facebook.com/mena323">mena ltofy</a></p>
      </footer>

      <div class="modal fade" id="instructor" role="dialog">
        <div class="modal-dialog modal-sm">
              
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center"><b>Instructor</b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="https://www.facebook.com/catipay.mustjc" target="_blank" title="My Instructor in OOP2"><big><b>dr.mostafa ahmed </b></big></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center">You are logged in as <b><?php echo $_SESSION['username']; ?></b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="logout.php" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/search.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>

    <script>
      {
        $(document).ready(function()
        {
          $('#myTable').DataTable();
        });
      }
    </script>
    <script>
      $(document).ready(function()
      {
        $("#myBtn").click(function()
        {
          $("#myModal").modal();
        });
      });
    </script>

  </body>
</html>