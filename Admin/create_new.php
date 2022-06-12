<?php
include './admin/connect.php';
$connect = new DB();
if ($connect) {

    $db = $connect->getConnect();
    $query = $db->query("SELECT * FROM categories");


    if ($query->num_rows > 0) {
        while ($queryAll = $query->fetch_object()) {
            $categories[] = $queryAll;
        }
    }

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
        body{

        }
    </style>

</head>

<body style=" background-color: black" >


<form class=" m-5 " action="./admin/NewCreate.php" method="post" enctype="multipart/form-data">
      <div class="form-group  ">
        <label for="title">Title</label>
        <input type="text"  class="form-control" id="title" name="title" placeholder="Enter title">
    </div>
    <div class="form-group  ">
        <label for="title">Title Second</label>
        <input type="text" class="form-control" name="title2" placeholder="Title Second">
    </div>
    <div class="form-group  ">
        <label for="title">Content</label>
        <textarea type="text"  class="form-control"  name="bodytext" placeholder="Content"></textarea>
    </div>

    <div  class="row ">
        <div class="form-group col-6">
            <label for="title">CreateDate</label>
            <input type="text"  class="form-control" id="title" name="create_time" value="<?php echo date("Y-m-d h:i:s"); ?>" placeholder="CreateDate">
        </div>
        <div class="form-group  col-6">
            <label for="title">UpdateDate</label>
            <input type="text"  class="form-control" id="title" name="update_time" value="<?php echo date("Y-m-d h:i:s"); ?>" placeholder="UpdateDate">
        </div>
    </div>
    <div class="form-group  ">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category_id">
            <option selected disabled hidden> select Category </option>
            <?php if (isset($categories)){
                foreach ($categories as $category){ ?>
                    <option value="<?= $category->id ?>"><?= $category->Name ?></option>
                <?php }
            } ?>
        </select>
    </div>
    <div class="form-group ">
        <label for="Image">Image</label> <br>
        <input type="file" class="form-control-file" id="image" name="image">
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


    <button type="submit" class="btn btn-primary ">Create Post</button>
</form>

















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