<?php
include "./admin/connect.php";
$connect = new DB;
$publicCategory =null;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_GET) && isset($_GET['edit'])) {
    $category_id = $_GET['id'];
        $publicCategory = $db->query(" SELECT * FROM categories where id=$category_id")->fetch_object();
    }


}else {
    echo "No Connection";
}
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

<body style="background-color: black"  >

<div class="loader"></div>
<div id="app">
    <section class="section">
        <div  class="container mt-5">
            <div class="row">
                <form style="border: none" class="form-control" method="POST" action="<?=$publicCategory ==null ? './admin/category_create.php' :'./admin/category_update.php'?>">
                    <div class="col-12 mt-5 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class=" mt-5 card card-Light">
                            <div class="card-header">
                                <h4>Write Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" id="name" name="name" value="<?=$publicCategory == null ? ' ' : $publicCategory->Name?>">
                                        <input type="hidden" class="form-control" id="name" name="id" value="<?=$publicCategory == null ? null : $publicCategory->id?>">
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">status</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric"  name="status">
                                            <option value="true" <?=$publicCategory != null ? ($publicCategory->status == 1 ? "selected" : '') : 'selected'?>>Publish</option>
                                            <option value="false" <?=$publicCategory != null ? ($publicCategory->status == 0 ? "selected" : '') : 'selected'?>>Not Publish </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">Create</button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </section>
</div>





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