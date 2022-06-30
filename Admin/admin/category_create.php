<?php
session_start();
require "./connect.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST)) {
        $category_id =$_POST['id'];
        $category_name = $_POST['name'];
        $category_status = $_POST['status'];
        $category = $db->query("insert into categories (name, status) values (\"$category_name\",\"$category_status\")");


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