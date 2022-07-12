

<?php
include "../Admin/admin/connect.php";

$connect = new DB;

if($connect) {
    $db = $connect->getConnect();

    $Jahon_new = $db->query("select * from products where category_id=(select id from categories where name like '%Jahon%' ) order by id asc limit 16");
    $Jahon_new_header = $db->query("select * from products where category_id=(select id from categories where name like '%Jahon%' ) order by id desc limit 2");


    $Jahon_new_headers = [];

    while ($row = $Jahon_new_header->fetch_object()) {
//        print_r($row);
        $Jahon_new_headers[] = $row;
    }




    $Jahon_new2 = [];

    while ($row = $Jahon_new->fetch_object()) {
//        print_r($row);
        $Jahon_new2[] = $row;
    }






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
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../assets/vendors/aos/dist/aos.css/aos.css" />
  <link rel="stylesheet" href="../assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="../assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css" />
  <!-- End plugin css for this page -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- endinject -->
</head>

<body>

  <header id="header">
    <div class="container">


      <!-- partial:../partials/_navbar.html -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="d-flex justify-content-between align-items-center navbar-top">
          <!-- <ul class="navbar-left">
            <li>Wed, March 4, 2020</li>
            <li>30°C,London</li>
          </ul> -->
          <div>
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/logo.svg" alt="" /></a>
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
                <a href="./admin/">
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
                <a class="nav-link active" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Business.php">Business</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Jahon_news.php">Jahon news</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- partial -->

  </header>
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <div class="text-center">
                  <h1 style="font-weight: bold;" class="text-center mt-5">
                      Jahon news
                  </h1>
                  <p class="text-secondary fs-15 mb-5">
                      This text can be added in the category Description field in
                      dashboard
                  </p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4  mb-5 mb-sm-2">
              <div class="author-box border p-5">
                  <div class="text-center">
                      <a href=""><img
                                  src="../assets/images/dashboard/bil34343.jfif"
                                  alt="news"
                                  class="img-lg img-fluid img-rounded mb-3"
                          /></a>
                      <p class="fs-12 m-0"> Author</p>
                      <h5 class="mb-2 font-weight-medium">Bill Gates</h5>

                  </div>
                  <p style="text-align: center">
                      Life is hectic - you have to get used to the truth.
                  </p>

              </div>
          </div>
          <div class="col-lg-8  mb-5 mb-sm-2">
              <div class="row">

                  <?php foreach($Jahon_new_headers as $Jahon_new_header): ?>
                      <div class="col-sm-6  mb-5 mb-sm-2 text-center">
                          <div class="position-relative image-hover">
                              <a href="../single.php?id=<?= $Jahon_new_header->id ?>"><img
                                          src="<?=$Jahon_new_header->image?>"
                                          class="img-fluid"
                                          alt="world-news"
                                  /></a>
                              <span class="thumb-title"><?=substr($Jahon_new_header->title, 0, 15)?></span>
                          </div>
                          <a href="../single.php?id=<?= $Jahon_new_header->id ?>" <h5 class="font-weight-600 mt-3">
                              <?=substr($Jahon_new_header->title2, 0, 30)?>
                          </h5>></a>
                          <p class="fs-15 font-weight-normal">
                              <?=substr($Jahon_new_header->bodytext, 0, 60)?>
                          </p>
                      </div>

                  <?php endforeach; ?>
              </div>

          </div>
      </div>
      <div class="row mt-5">
          <div class="col-sm-12">
              <h5 class="text-muted font-weight-medium mb-3">Popular News</h5>
          </div>
      </div>
      <div class="row mb-4">
          <?php foreach($Jahon_new2 as $Jahon_new): ?>
              <div class="col-sm-3  mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                      <a href="../single.php?id=<?= $Jahon_new->id ?>"> <img
                                  src="<?=$Jahon_new->image?>"
                                  class="img-fluid"
                                  alt="world-news"
                          /></a>
                      <span class="thumb-title"><?=substr($Jahon_new->title, 0, 15)?></span>
                  </div>
                  <a href="../single.php?id=<?= $Jahon_new->id ?>"> <h5 class="font-weight-600 mt-3">
                          <?=substr($Jahon_new->title2, 0, 50)?>
                      </h5></a>
              </div>


          <?php endforeach; ?>
      </div>
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
            <img src="../assets/images/logo.svg" class="footer-logo" alt="" />

            <div class="d-flex justify-content-end footer-social">
<!--              <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>-->
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
              <li><a href="#">Terms of Use.</a></li>
              <li><a href="#">Privacy Policy.</a></li>
              <li><a href="#">Accessibility & CC.</a></li>
              <li><a href="#">AdChoices.</a></li>
              <li><a href="#">Advertise with us Transcripts.</a></li>
              <li><a href="#">License.</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
            <p class="font-weight-medium">
              © 2022 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@ BootstrapDash</a>,
              Inc.All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- partial -->
  <!-- inject:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../assets/vendors/aos/dist/aos.js/aos.js"></script>
  <script src="../assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../assets/js/demo.js"></script>
  <!-- End custom js for this page-->
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>

</html>