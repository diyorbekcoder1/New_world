<?php
require "./connect.php";
$connect = new DB;


if ($connect) {
    $db = $connect->getConnect();



    if (isset($_POST['update'])) {
        $Name = $_POST['name'];
        $id = $_POST['id'];
        $status = $_POST['status'];
        if ($Name && $id && $status) {
            $news = $db->query("UPDATE categories SET Name='$Name',status=$status where id = $id ");
            if ($news) {
                header("Location: /admin/");
            } else {
                echo "data not save" . $db->error;
            }
        } else {
            echo "no date";
        }
    }
}
