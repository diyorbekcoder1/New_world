<?php
session_start();
include './admin/connect.php';
$connect = new DB();
if ($connect) {
    $db = $connect->getConnect();
    $query = $db->query("SELECT * FROM products");


    if ($query->num_rows > 0) {
        while ($queryAll = $query->fetch_object()) {
            $products[] = $queryAll;
        }
    }

    $categories = [];
    $db2query = $db->query("SELECT * FROM categories");
    if ($db2query->num_rows > 0) {
        while ($queryAll = $db2query->fetch_object()) {
            $categories[] = $queryAll;
        }
    }

    $user= [];
    $db3query = $db->query("SELECT * FROM users");
    if ($db3query->num_rows > 0) {
        while ($queryAll = $db3query->fetch_object()) {
            $user[] = $queryAll;
        }
    }


//    echo "\n";
//    print_r($categories);

}


?>

<?php



?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
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
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="search-panel">
                <div class="search-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn">Close <i class="fa fa-close"></i></div>
                    <form id="searchForm" action="#">
                        <div class="form-group">
                            <input type="search" name="search" placeholder="What are you searching for...">
                            <button type="submit" class="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <!-- Navbar Header--><a href="./index.php" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">World</strong><strong>Vision</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">W</strong><strong>V</strong></div>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                </div>
                <div class="right-menu list-inline no-margin-bottom">
                    <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                        <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                                    <div class="status online"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                                    <div class="status away"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                                    <div class="status busy"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                                    <div class="status offline"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div>
                            </a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
                    </div>
                    <!-- Tasks-->
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
                        <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div>
                            </a><a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                                </div>
                            </a><a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                                </div>
                            </a><a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                                </div>
                            </a><a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div>
                            </a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
                        </div>
                    </div>
                    <!-- Tasks end-->
                    <!-- Megamenu-->
                    <div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu megamenu">
                            <div class="row">
                                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                                    <ul class="list-unstyled mb-3">
                                        <li><a href="#">Lorem ipsum dolor</a></li>
                                        <li><a href="#">Sed ut perspiciatis</a></li>
                                        <li><a href="#">Voluptatum deleniti</a></li>
                                        <li><a href="#">At vero eos</a></li>
                                        <li><a href="#">Consectetur adipiscing</a></li>
                                        <li><a href="#">Duis aute irure</a></li>
                                        <li><a href="#">Necessitatibus saepe</a></li>
                                        <li><a href="#">Maiores alias</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                                    <ul class="list-unstyled mb-3">
                                        <li><a href="#">Lorem ipsum dolor</a></li>
                                        <li><a href="#">Sed ut perspiciatis</a></li>
                                        <li><a href="#">Voluptatum deleniti</a></li>
                                        <li><a href="#">At vero eos</a></li>
                                        <li><a href="#">Consectetur adipiscing</a></li>
                                        <li><a href="#">Duis aute irure</a></li>
                                        <li><a href="#">Necessitatibus saepe</a></li>
                                        <li><a href="#">Maiores alias</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                                    <ul class="list-unstyled mb-3">
                                        <li><a href="#">Lorem ipsum dolor</a></li>
                                        <li><a href="#">Sed ut perspiciatis</a></li>
                                        <li><a href="#">Voluptatum deleniti</a></li>
                                        <li><a href="#">At vero eos</a></li>
                                        <li><a href="#">Consectetur adipiscing</a></li>
                                        <li><a href="#">Duis aute irure</a></li>
                                        <li><a href="#">Necessitatibus saepe</a></li>
                                        <li><a href="#">Maiores alias</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                                    <ul class="list-unstyled mb-3">
                                        <li><a href="#">Lorem ipsum dolor</a></li>
                                        <li><a href="#">Sed ut perspiciatis</a></li>
                                        <li><a href="#">Voluptatum deleniti</a></li>
                                        <li><a href="#">At vero eos</a></li>
                                        <li><a href="#">Consectetur adipiscing</a></li>
                                        <li><a href="#">Duis aute irure</a></li>
                                        <li><a href="#">Necessitatibus saepe</a></li>
                                        <li><a href="#">Maiores alias</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row megamenu-buttons text-center">
                                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Megamenu end     -->
                    <!-- Languages dropdown    -->
                    <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                        <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/UZ.png" alt="English" class="mr-2"><span>Uzbek</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/RU.png" alt="English" class="mr-2"><span>Russia </span></a></div>
                    </div>
                    <!-- Log out               -->
                    <div class="list-inline-item logout"> <a id="logout" href="./login.php" class="nav-link">Logout <i class="icon-logout"></i></a></div>
                </div>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h5">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li><a href="./index.php"> <i class="icon-home"></i>WorldVision </a></li>
                <li><a href="adminRegister.php"> <i class="icon-padnote"></i>Register Admin </a></li>
                <li class="active"><a href="./tables.php"> <i class="icon-grid"></i>Tables </a></li>
<!--                <li><a href="./forms.php"> <i class="icon-padnote"></i>Forms </a></li>-->
                <!-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                    </ul>
                </li> -->
<!--                <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>-->
            <!-- </ul><span class="heading">Extras</span>
            <ul class="list-unstyled">
                <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
            </ul> -->
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Tables</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">World Vision</a></li>
                    <li class="breadcrumb-item active">Tables </li>
                </ul>
            </div>
            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <div class="title"><strong>News</strong> <strong>|</strong> <a href="create_new.php"><div style="color: black;font-weight: bold" class=" ml-2 btn btn-success">News add</div></a>   </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>CreateDate</th>
                                            <th>UpdateDate</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (isset($products)) {
                                            foreach ($products as $key => $product) {
                                                $cat = $db->query("select  name from categories where id= $product->category_id");
                                                $cat1 = $cat->fetch_object();
                                                ?>
                                                <tr>
                                                    <th scope="row"><?= ++$key ?></th>
                                                    <td><?= $product->title ?></td>
                                                    <td class=" "><img style="width: 50px; height: 50px; border-radius: 50%;" src=" <?= $product->image ?>" alt=""></td>
                                                    <td><?= $product->create_time ?></td>
                                                    <td><?= $product->update_time ?></td>
                                                    <td>
                                                        <div style=" padding: 10px 10px 10px 10px; border-radius: 30px; "; class="badge  badge-info badge-shadow"><?= $cat1->name ?></div>
                                                    </td>
                                                    <td>

                                                        <div style=" padding: 8px 10px 8px 10px; border-radius: 30px; ";   class="badge  <?= ($product->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($product->status == 1) ? 'Active' : 'deactive' ?></div>
                                                    </td>
                                                    <td style="width: 220px  !important;">


                                                        <a href=" ../single.php" style="padding: 5px 10px 5px 10px;" class="btn btn-outline-warning">View</a>
                                                        <a href="./admin/NewEdit.php ?id=<?= $product->id ?>"  style="padding: 5px 10px 5px 10px;" class="btn btn-outline-success">Edit</a>
                                                        <a href=" ./admin/NewDelete.php?id=<?= $product->id ?>" style="padding: 5px 10px 5px 10px;" class="btn btn-outline-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>Categories</strong> <strong>|</strong> <a href="category_create.php"><div style="color: black;font-weight: bold" class=" ml-2 btn btn-success">Category add</div></a>   </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead style="color:white">
                                        <tr>
                                            <th>ID</th>
                                            <th> Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($categories as $key => $category): ?>
                                        <tr>
                                            <th scope="row"><?= ++$key ?></th>
                                            <td><?=$category->Name?></td>
                                            <td>
                                                <div style=" padding: 10px 20px 10px 20px; border-radius: 30px; "; class="badge  badge-success badge-shadow"><?=$category->status ? "active" : "no active"?></div>
                                            </td>
                                            <td style="width: 220px ">
                                                    <form  style="display: inline;" method="POST" action="./category_create.php">
                                                    <input hidden type="text" name="id" value="<?=$category->id?>">
                                                    <button style=" padding: 5px 15px 5px 15px; " class="btn btn-outline-success" type="submit" name="edit" >Edit</button>
                                                </form>
                                                <form  style="display: inline;" method="POST"  action="./admin/category_delete.php">
                                                    <input hidden type="text" name="id" value="<?=$category->id?>">
                                                    <button style=" padding: 5px 15px 5px 15px;" class="btn btn-outline-danger" type="submit" name="delete">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="block margin-bottom-sm">
                                <div class="title"><strong>Admins</strong></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="color:white">
                                            <tr>
                                                <th>ID</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Username</th>
                                                <th>Register Admin</th>
                                                <td>Status</td>
                                            </tr>

                                        </thead>
                                        <tbody >
                                        <?php foreach ($user as $key => $users): ?>
                                            <tr>
                                                <th scope="row"><?= ++$key ?></th>
                                                <td><?= $users->firstname ?></td>
                                                <td><?= $users->lastname ?></td>
                                                <td><?= $users->username ?></td>
                                                <td>

                                                    <div style=" padding: 10px 20px 10px 20px; border-radius: 30px; "   class="badge  <?= ($users->is_admin == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($users->is_admin == 1) ? 'Active' : 'deactive' ?></div>
                                                </td>
                                                <td>

                                                    <div style=" padding: 5px 15px 5px 15px; " class="btn btn-outline-success" class="badge  <?= ($users->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($users->status == 1) ? 'Active' : 'Active' ?></div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="footer__block block no-margin-bottom">
                    <div class="container-fluid text-center">
                        <p class="no-margin-bottom">2022 &copy; Your company. Download From <a target="_blank" href="https://github.com/">Github</a>.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
</body>

</html>