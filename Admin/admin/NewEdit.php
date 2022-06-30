<?php
session_start();
include "./connect.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST)) {
        $title1 = $_POST['title'];
        $title2 = $_POST['title2'];
        $bodytext = $_POST['bodytext'];
        $image = $_FILES['image'];
        $category_id = $_POST['category_id'];
        $id = $_POST['id'];
        $status = $_POST['status'] === "true";
        $update_time = $_POST['update_time'];
        if (isset($_FILES['image'])) {
            $folder_read = '/assets/images/news/';
            $folder = '../../assets/images/news/';
            $path = $folder . $_FILES['image']['name'];
            if (file_exists($path)) {
                unlink($path);
            };
            if ($_FILES['image']['size'] > 50000000) {
                    echo "faylni hajmi 5mb dan ortib ketdi";
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    if ($ext === 'jpg' || $ext === 'jpeg' || $ext === 'png' || $ext === 'gif' || $ext === 'bmp') {
                        if (!move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            echo "error IMAGE";
                        } else {
                            $path2 = $folder_read . $_FILES['image']['name'];
                        }
                    }
                }
            }
        } else {
            echo "Image null!!";
        }
        if ($title1 && $title2 && $bodytext && $path2 && $update_time &&  $category_id && $status ){
            $news = $db->query("UPDATE products SET title=\"$title1\",title2 = \"$title2\",bodytext=\"$bodytext\",image=\"$path2\",category_id=\"$category_id\",update_time=\"$update_time\", status = \"$status\" where id = $id");
            if ($news) {
                header("Location: ../tables.php");
            } else {
                echo "data not save" . $db->error;
            }
        } else {
            echo "no date";
        }
}

?>