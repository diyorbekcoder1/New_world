<?php
require "./connect.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST)) {
        $category_id =$_POST['id'];
        $category_name = $_POST['name'];
        $category_status = $_POST['status'];
//        print_r($category_id);
        $category = $db->query("UPDATE categories SET Name=\"$category_name\",status='$category_status' where id=$category_id");

        if ($category) {
            header("Location: /admin");
        } else {
            echo "data not save" . $db->error;
        }
        }
}else {
    echo "No Connection";
}
?>