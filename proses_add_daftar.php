<?php
include_once("connection.php");

if ($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['id_level_user'];


    // perintah SQL 
    $result = mysqli_query($conn, "INSERT INTO user_akun(id_level_user, username, password, email) VALUES('$level', '$username', '$password', '$email')");

    header("Location: login.php");
}