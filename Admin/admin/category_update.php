<?php
require "./connect.php";
$connect = new DB();
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST)) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $status = $_POST['status'];
        if ($name && $id && $status) {
            $news = $db->query("UPDATE categories SET name='$name',status=$status where id = $id ");
            if ($news) {
                header("Location: ../tables.php");
            } else {
                echo "data not save" . $db->error;
            }
        } else {
            echo "no date";
        }
    }
}

?>