<?php

require "./connect.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    $delete = $_POST['delete'];
    $c_id = $_POST['id'];
    if (isset($delete)) {
        $cat = $db->query(" DELETE FROM categories WHERE id = $c_id ");
        if ($cat) {
            header("Location: ../tables.php");
        } else {
            echo "data not save" . $db->error;
        }
    } else {
        echo "no date";
    }
}
