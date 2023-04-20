<?php
include "index-support.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ware Houses </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="css/font.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tweaks for older IEs-->
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="public/index.php" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Ware</strong><strong>Houses</strong></div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">
          <!-- Log out               -->
          <div class="list-inline-item logout">
            <div style="display: flex; flex-direction: column;">
              <h1 class="h5" style="display: flex; justify-content: center"><?= $_SESSION['username'] ?? '' ?></h1>
              <a href="logout.php" class="nav-link text-primary">Logout <i class="icon-logout"></i></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->

      <!-- Sidebar Navidation Menus-->
      <span class="heading">Main</span>
      <ul class="list-unstyled">
        <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
        <li><a href="tables.html"> <i class="icon-user"></i>User </a></li>
        <li><a href="tables.html"> <i class="icon-form-1"></i>Product </a></li>
        <li><a href="charts.html"> <i class="icon-windows"></i>Category </a></li>
        <li><a href="forms.html"> <i class="icon-new-file"></i>Arrival of Goods </a></li>
        <li><a href="hisob.html"> <i class="icon-bars"></i>Report </a></li>
        <!-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li> -->
      </ul>
    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <!-- <?php include "Product.php" ?> -->
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="js/charts-home.js"></script>
  <script src="js/front.js"></script>
</body>

</html>