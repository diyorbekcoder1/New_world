<?php
include "./Admin/admin/connect.php";

$connect = new DB;

if ($connect) {
    $db = $connect->getConnect();
    $queryNews = $db->query("SELECT * FROM products where status = true");
    $Last_News = $db->query("select * from products where category_id=(select id from categories where name like '%Yangiliklar%' ) order by id desc limit 6");
    $Last_New = $db->query("select title, title2,image from products where top=1 order by id desc limit 4");


    $headers = [];

    while ($row = $Last_New->fetch_object()) {
//        print_r($row);
        $headers[] = $row;
    }


    $results = [];

    while ($row = $Last_News->fetch_object()) {
//        print_r($row);
        $results[] = $row;
    }


    $result = [];

    while ($row = $queryNews->fetch_object()) {
//        print_r($row);
        $result[] = $row;
    }


}

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>World Vision</title>
    <!-- plugin css for this page -->
    <link
            rel="stylesheet"
            href="./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="./assets/vendors/aos/dist/aos.css/aos.css"/>
    <link
            rel="stylesheet"
            href="./assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
            rel="stylesheet"
            href="./assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png"/>
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
                            <a class="navbar-brand" href="./index.php"
                            ><img src="assets/images/logo.svg" alt=""
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
                                    <a href="./Admin/">
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
                        >
                            <ul
                                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                            >
                                <li>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link active" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/news.php">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/Business.php">Business</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/Jahon_news.php">Jahon news</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- partial -->
            </div>
        </header>
        <div class="container">
            <div class="banner-top-thumb-wrap">
                <div class="d-lg-flex justify-content-between align-items-center">

                    <?php foreach ($headers as $header): ?>
                        <div class="d-flex justify-content-between  mb-3 mb-lg-0">
                            <div>
                                <a href="./single.php?id=<?= $header->id ?>"><img
                                            src="<?= $header->image ?>"
                                            alt="thumb"
                                            class="banner-top-thumb"
                                    /></a>
                            </div>
                            <a href="single.php?id=<?= $header->id ?>"><h5 class="m-0 font-weight-bold">
                                    <?= substr($header->title2, 0, 30) ?>
                                </h5></a>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme" id="main-banner-carousel">
                        <?php if (isset($headers)) {
                            foreach ($headers as $header) { ?>
                                <div class="item">
                                    <div class="carousel-content-wrapper mb-2">
                                        <div class="carousel-content">
                                            <h1 class="font-weight-bold">
                                                <?= $header->title ?>
                                            </h1>
                                            <h5 class="font-weight-normal  m-0">
                                                <?= $header->title2 ?>
                                            </h5>
                                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="mdi mdi-comment-outline"></i>
                                            </p>
                                        </div>
                                        <div class="carousel-image">
                                            <img src="<?= $header->image?>" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <?php foreach ($results as $LastNew): ?>
                            <div class="col-sm-6">
                                <div class="py-3 border-bottom">
                                    <div class="d-flex align-items-center pb-2">
                                        <img
                                                src=" <?= $LastNew->image ?>"
                                                class="img-xs img-rounded mr-2"
                                                alt="thumb"
                                        />
                                        <span class="fs-12 text-muted"><?= substr($LastNew->title, 0, 15) ?></span>
                                    </div>
                                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                        <?= substr($LastNew->title, 0, 80) ?>
                                    </p>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>


                </div>

            </div>
            <div class="world-news">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex position-relative  float-left">
                            <h3 class="section-title">World News</h3>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <?php foreach ($result as $new): ?>
                        <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                            <div style="width:auto;height: auto;" class="position-relative image-hover">
                                <a href="single.php?id=<?= $new->id ?>"><img
                                            src="<?= $new->image ?>"
                                            class="img-fluid"
                                            alt="world-news"
                                    /></a>
                                <span class="thumb-title"> <?= substr($new->title, 0, 15) ?></span>
                            </div>
                            <a href="single.php?id=<?= $new->id ?>"><h5 class="font-weight-bold mt-3">
                                    <?= substr($new->title2, 0, 50) ?>
                                </h5></a>
                            <p class="fs-15 font-weight-normal">
                                <?= substr($new->bodytext, 0, 50) ?>
                            </p>
                            <a href="single.php?id=<?= $new->id ?>" class="font-weight-bold text-dark pt-2  "
                            >Read Article</a
                            >
                        </div>
                    <?php endforeach; ?>
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
                                <img src="assets/images/logo.svg" class="footer-logo" alt=""/>

                                <div class="d-flex justify-content-end footer-social">
                                    <!--                    <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>-->
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
                            <div
                                    class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                            >
                                <ul class="footer-horizontal-menu">

                                    <li><a href="#">Man shop</a></li>
                                    <li><a href="#">Golden house</a></li>
                                    <li><a href="#">World Vision</a></li>

                                </ul>
                                <p class="font-weight-medium">
                                    © 2022 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">Fazliddinov</a>,
                                    Inc. All Rights Reserved.
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
