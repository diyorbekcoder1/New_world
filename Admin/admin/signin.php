<?php
include "./connect.php";
$connect = new DB();
if ($connect){
    $db = $connect->getConnect();
    if (isset($_POST)){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $is_admin = 1;
        if (isset($firstname)){
            if (isset($lastname)){
                if (isset($username)){
                    if (isset($password)){
                        $query = $db->query("INSERT INTO users (firstname, lastname, username, password, is_admin) VALUES ('$firstname', '$lastname', '$username', '$password', '$is_admin')");
                        if ($query){
                            echo '<script>alert("User created!")</script>';
                            header('Location: ../login.php');
                        }
                        else {
                            echo '<script>confirm("User not created!")</script>';
                            header('Location: ../adminRegister.php');
                        }
                    }
                    else {
                        echo '<script>alert("Enter password!")</script>';
                        header('Location: ../adminRegister.php');

                    }
                }
                else {
                    echo '<script>confirm("Enter username!")</script>';
                    header('Location: ../adminRegister.php');

                }
            }
            else {
                echo '<script>confirm("Enter lastname!")</script>';
                header('Location: ../adminRegister.php');
            }
        }
        else {
            echo '<script>confirm("Enter Firstname!")</script>';
            header('Location: ../adminRegister.php');
        }
    }

}
