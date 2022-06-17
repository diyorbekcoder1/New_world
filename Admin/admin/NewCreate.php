<?php
require "./connect.php";
$connect = new DB();
if ($connect) {
    $db = $connect -> getConnect();
    if (isset($_POST)) {
        $title1 = $_POST['title'];
        $title2 = $_POST['title2'];
        $bodytext = $_POST['bodytext'];
//        $top = $_POST['top'] === "true";
        $image = $_FILES['image'];
        $category_id = $_POST['category_id'];
        $status = $_POST['status'] === "true";
        $create_time = $_POST['create_time'];
        $update_time = $_POST['update_time'];
        if (isset($_FILES['image'])) {
            $folder_read = '/assets/images/news/';
            $folder = '../../assets/images/news/';
            $path = $folder . $_FILES['image']['name'];
            if (file_exists($path)) {
                unlink($path);
                if ($_FILES['image']['size'] > 50000000) {
                    echo "faylni hajmi 5mb dan ortib ketdi";
                    die();
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            $path2 = $folder_read . $_FILES['image']['name'];
                        } else {
                            echo "error IMAGE";
                        }
                    }
                }

            } else {

                if ($_FILES['image']['size'] > 50000000) {
                    echo "faylni hajmi 5mb dan ortib ketdi";
                    die();
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            $path2 = $folder_read . $_FILES['image']['name'];
                        } else {
                            echo "error IMAGE";
                        }
                    }
                }

            }

        } else {
            echo "Image null!!";
        }

        if ($title1 && $title2 && $bodytext && $category_id && $create_time && $update_time ) {
            $news = $db->query("INSERT INTO products (title,title2,bodytext,category_id,update_time,create_time,status,image) values
             (\"$title1\",\"$title2\",\"$bodytext\",\"$category_id\",\"$create_time\",\"$update_time\",$status,\"$path2\") ");
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