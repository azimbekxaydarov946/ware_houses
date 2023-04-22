<?php
include "index-support.php";
session_start();
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
        <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
        <li><a href="user-page.php"> <i class="icon-user"></i>User </a></li>
        <li><a href="product-page.php"> <i class="icon-form-1"></i>Product </a></li>
        <li><a href="category-page.php"> <i class="icon-windows"></i>Category </a></li>
        <li><a href="come-product-page.php"> <i class="icon-new-file"></i>Arrival of Goods </a></li>
        <li><a href="report-page.php"> <i class="icon-bars"></i>Report </a></li>
        <!-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li> -->
      </ul>
    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <!-- <php include "Product.php" ?> -->
      <?php
      if (isset($_SESSION['user_page']) && $_SESSION['user_page'] == true) {
        include "user-page.php";
      }
      if (isset($_SESSION['product_page']) && $_SESSION['product_page'] == true) {
        include "product-page.php";
      }
      if (isset($_SESSION['categry_page']) && $_SESSION['categry_page'] == true) {
        include "categry-page.php";
      }
      if (isset($_SESSION['come_product_page']) && $_SESSION['come_product_page'] == true) {
        include "come-product-page.php";
      }
      if (isset($_SESSION['report_page']) && $_SESSION['report_page'] == true) {
        include "report-page.php";
      }
      ?>

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