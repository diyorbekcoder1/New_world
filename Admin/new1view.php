<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('Location: /Admin/login.php');
}
include "./admin/connect.php";

$connect = new DB();
if($connect) {
    $db = $connect->getConnect();
    $id = $_GET['id'];
//    var_dump($_GET);
//    die();
    $Newview = $db->query("SELECT * FROM products where id = $id");

    if ($Newview->num_rows > 0) {
        while ($rows = $Newview->fetch_object()) {
            $views[] = $rows;
        }
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
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">

                <div>
                    <a class="navbar-brand" href="./index.php"
                    ><img src="../assets/images/logo.svg" alt=""
                        /></a>
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
                            <a href="">
                                <i class="iconify" data-icon="clarity:users-solid"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-bottom-menu">
                <button
                        class="navbar-toggler"
                        type="button"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div
                        class="navbar-collapse justify-content-center collapse"
                        id="navbarSupportedContent"
            </div>
    </div>
    </nav>
  </div>
</header>
<div class="container-scroller ">
    <div class="main-panel">
        <?php  foreach ($views as $view) { ?>
            <div style="margin-top: 30px" class="container text-center">
                <div class="about-right mb-90 p-5">
                    <h1 class="text-center"> <?=$view->title?></h1>
                    <div class="m-5">
                        <img src="<?=$view->image?>" class="img-fluid" alt="">
                    </div>
                    <div class="section-tittle mb-30 pt-30">
                        <h3><?=$view->title2?></h3>
                    </div>
                    <div class="about-prea">
                        <p class="about-pera1 mb-25">
                            <?=$view->bodytext?>
                        </p>
                    </div>

                </div>
                <div class="card">
                    <span><b>Create date:</b> | <?= $view->create_time ?></span>
                    <br>
                    <span><b>Update date:</b> | <?= $view->update_time ?></span>
                </div>
        <?php } ?>
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
                        <div class="d-lg-flex justify-content-between  border-top mt-5 footer-bottom">
                            <a href="./tables.php" style="padding: 10px 20px 10px 20px; border-radius: 30px; font-weight: bold" class="btn btn-success">Tables</a>
                            <a href="../index.php" style="padding: 10px 20px 10px 20px; border-radius: 30px;font-weight: bold" class="btn btn-danger">Home</a>
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