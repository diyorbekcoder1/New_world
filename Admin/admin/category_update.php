<?php
require "./connect.php";
$connect = new DB;


if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST)) {
        $Name = $_POST['name'];
        $id = $_POST['id'];
        $status = $_POST['status'];
        if ($Name && $id && $status) {
            $news = $db->query("UPDATE categories SET name='$Name',status=$status where id = $id ");
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