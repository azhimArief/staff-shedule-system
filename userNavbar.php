<?php
include_once("header.php");
if (!isset($_SESSION)) {
  session_start();
}
$name = $_SESSION['nameID'];
?>

<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- <style>
    body {
      position: fixed;
    }
  </style> -->
</head>

<body>

  <nav class="navbar sticky-top navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="userHome.php">
          <!--BUPC --> PDSA-Sistem Pergerakan Pegawai
        </a>
      </div>
      <div>


        <ul class="nav navbar-nav navbar-right">
          <li><a><span class="glyphicon glyphicon-user"> <?php echo $name ?></span></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="userHome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

</body>

</html>