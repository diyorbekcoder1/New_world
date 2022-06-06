<?php
require "../admin/connect.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST)) {
        $category_id =$_POST['id'];
        $category_name = $_POST['name'];
        $category_status = $_POST['status'];
//        print_r($category_id);
        $category = $db->query("insert into categories (Name, status) values (\"$category_name\",\"$category_status\")");

        if ($category) {
            header("Location: ../tables.php");
        } else {
            echo "data not save" . $db->error;
        }
    }
}else {
    echo "No Connection";
}
?>