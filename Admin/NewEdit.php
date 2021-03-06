<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('Location: /Admin/login.php');
}
include './admin/connect.php';
$connect = new DB();
$items = [];

if ($connect) {
    $db = $connect->getConnect();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $products = $db->query("select * from products where id = $id");
        if ($products->num_rows > 0) {
            while ($items = $products->fetch_object()) {
                $n[] = $items;
            }
        }
    }

    $categories = $db->query("select id, name from categories where status = 1");


    $arrCategory = [];
    if ($categories->num_rows > 0) {
        while ($queryAll = $categories->fetch_object()) {
            $arrCategory[] = $queryAll;
        }
    }
        $n = $n[0];
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
    <style>
        body {

        }
    </style>

</head>

<body style=" background-color: black">


<form class=" m-5 " action="admin/NewEdit.php?id=<?= $n->id ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group  ">
        <input type="hidden" class="form-control" name="id" value="<?= $n->id ?>">

    </div>
    <div class="form-group  ">
        <label for="title">Title</label>
        <input value="<?= $n->title ?? '' ?>" type="text" class="form-control" id="title" name="title"
               placeholder="Enter title">
    </div>
    <div class="form-group  ">
        <label for="title">Title Second</label>
        <input type="text" class="form-control" name="title2" placeholder="Title Second" value="<?= $n->title2 ?? '' ?>">
    </div>
    <div class="form-group  ">
        <label for="title">Content</label>
        <textarea type="text"  class="form-control"  name="bodytext" placeholder="Content"><?= $n->bodytext ?? '' ?></textarea>
    </div>
    <div class="row ">
        <div class="form-group col-6 d-none">
            <label for="title">CreateDate</label>
            <input type="hidden" class="form-control" id="title" name="create_time"
                   value="<?php echo date("Y-m-d h:i:s"); ?>" placeholder="CreateDate">
        </div>
        <div class="form-group  col-6 d-none">
            <label for="title">UpdateDate</label>
            <input type="hidden" class="form-control" id="title" name="update_time"
                   value="<?php echo date("Y-m-d h:i:s"); ?>" placeholder="UpdateDate">
        </div>
    </div>
    <div class="form-group  ">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category_id">
            <option selected disabled hidden> select Category</option>
            <?php if (isset($arrCategory)) {
                foreach ($arrCategory as $key=>$category) {
                 ?>

                    <option value="<?= $category->id ?>"<?= $n->category_id == $category->id ? 'selected' : '' ?>><?= $category->name ?></option>
                <?php }
            } ?>
        </select>
    </div>
    <div class="form-group m-2">
        <label for="Image">Image</label> <br>
        <img style="width: 50px; height: 50px; border-radius: 50%;" src="./assets/images/<?= $n->image ?>"
             alt="">
        <br> <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <div class="">
            <select class="form-control selectric" name="status">
                <option value="true">Active</option>
                <option value="false">No active</option>
            </select>
        </div>
    </div>


    <button type="submit" class="btn btn-primary " >Edit Post</button>
</form>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="js/charts-home.js"></script>
<script src="js/front.js"></script>
</body>

</html>