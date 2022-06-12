<?php
include "./Admin/admin/connect.php";

$connect = new DB;

if($connect) {
    $db = $connect->getConnect();
    $id = $_GET['id'];
    $single = $db->query("SELECT * FROM products where id = $id")->fetch_object();
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>World Vision</title>
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="./assets/vendors/aos/dist/aos.css/aos.css" />
  <link rel="stylesheet" href="./assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="./assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css" />
  <!-- End plugin css for this page -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <header id="header">
        <div class="container">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">

              <div>
                <a class="navbar-brand" href="./index.php"><img src="assets/images/logo.svg" alt="" /></a>
              </div>
              <div class="d-flex">
                <ul class="navbar-right">
                  <li>
                    <a href="#">Lotin</a>
                  </li>
                  <li>
                    <a href="#">Kiril</a>
                  </li>
                </ul>
                <ul class="social-media">
                  <li>
                    <a href="https://www.instagram.com/">
                      <i class="mdi mdi-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="./Admin/login.php">
                        <i class="iconify" data-icon="clarity:users-solid"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="navbar-bottom-menu">
              <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                  <li>
                    <button class="navbar-close">
                      <i class="mdi mdi-close"></i>
                    </button>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link active" href="./index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/world.php">World</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/author.php">Real estate</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/aboutus.php">About Us</a>
                  </li>
<!--                  <li class="nav-item">-->
<!--                    <a class="nav-link" href="./index.php">Business</a>-->
<!--                  </li>-->

                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="container text-center">
         <div class="about-right mb-90 p-5">
              <h1 class="text-center"> <?=$single->title?></h1>
            <div class="m-5">
              <img src="<?=$single->image?>" class="img-fluid" alt="">
            </div>
            <div class="section-tittle mb-30 pt-30">
              <h3><?=$single->title2?></h3>
            </div>
            <div class="about-prea">
              <p class="about-pera1 mb-25">
                  <?=$single->bodytext?>
              </p>
            </div>

          </div>


    
      </div>

      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="border-top"></div>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="d-flex justify-content-between mt-5">
                <img src="assets/images/logo.svg" class="footer-logo" alt="" />

                <div class="d-flex justify-content-end footer-social">

                  <ul class="social-media">
                    <li>
                      <a href="https://www.instagram.com/">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom">
                <ul class="footer-horizontal-menu">
                  <li><a href="#">Jora.uz</a></li>
                  <li><a href="#">AzNews</a></li>
                  <li><a href="#">MollaShop</a></li>
                  <li><a href="#">WorldVision</a></li>

                </ul>
                <p class="font-weight-medium">
                  © 2022 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">Yusupov</a>, Inc.
                  All Rights Reserved.
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- partial -->
    </div>
  </div>
  <!-- inject:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="./assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="./assets/js/demo.js"></script>
  <!-- End custom js for this page-->
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>

</html>