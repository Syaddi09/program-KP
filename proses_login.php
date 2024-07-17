<?php

include_once ("connection.php");

session_start();

if ($_POST){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user_akun WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0){
        // echo "Berhasil Login";
        $user_data = mysqli_fetch_assoc($result);
        $_SESSION['sudahLogin'] = true;
        $_SESSION['level_user'] = $user_data['id_level_user'];
        $_SESSION['username'] = $username;
        header("Location: admin.php");
    }else{
        // echo "Gagal Login";
        $error_login = "<p class='error-message'>Password dan Username salah!!</p>";
        echo $error_login;
        header("Location: login.php?error=" . $error_login);
    }
    
}